#!/bin/bash
value=0; #$(</sys/class/leds/input3\:\:scrolllock/brightness)
newValue=0
ledFile=""

for d in /sys/class/leds/*/; do
  if [[ $d =~ scrolllock ]]; then
	  value=$(<"$d"brightness);
	  ledFile="$d"brightness
	  break;
  fi
done

echo Found value: $value;

if [ $value -eq 0 ]; then
       	newValue=1
else
	newValue=0
fi
echo New Value to set: $newValue to path $ledFile

echo $newValue > $ledFile
echo

#[ -f /sys/class/leds/input3\:\:scrolllock/brightness ] && echo ! $value > /sys/class/leds/input3\:\:scrolllock/brightness

echo "Current backlight state is $value"
echo