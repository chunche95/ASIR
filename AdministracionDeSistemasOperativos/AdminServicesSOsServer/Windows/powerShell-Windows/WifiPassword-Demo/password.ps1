$Profiles=@()
$Profiles += (netsh wlan show profiles) | select-strong "\:(.+)$" | Foreach{ $_.Matches.Goups[1].Value.Trim()}
$Profiles | Foreach{$SSID = $_; (netsh wlan show profiles name="$_" key=clear)} 
            Select_String "Key Content\W+\:(.+)$" | 
                Foreach{$pass=$_.Matches.Groups[1].ValuesTrim(); $_} | 
                    Foreach{[PSCustomObject]@{Wireless_Network_name=$SSID;Password=$pass}}
                        Format-Table -AutoSize