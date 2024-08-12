# Update, upgrade and install development tools:
apt-get update
apt-get -y upgrade
apt-get -y install build-essential git-core curl libssl-dev \
libreadline5 libreadline5-dev \
zlib1g zlib1g-dev \
libmysqlclient-dev \
libcurl4-openssl-dev \
libxslt-dev libxml2-dev
 
# Install rbenv
git clone git://github.com/sstephenson/rbenv.git /usr/local/rbenv
 
# Add rbenv to the path:
echo '# rbenv setup' > /etc/profile.d/rbenv.sh
echo 'export RBENV_ROOT=/usr/local/rbenv' >> /etc/profile.d/rbenv.sh
echo 'export PATH="$RBENV_ROOT/bin:$PATH"' >> /etc/profile.d/rbenv.sh
echo 'eval "$(rbenv init -)"' >> /etc/profile.d/rbenv.sh
 
chmod +x /etc/profile.d/rbenv.sh
source /etc/profile.d/rbenv.sh
 
# Install ruby-build:
pushd /tmp
git clone git://github.com/sstephenson/ruby-build.git
cd ruby-build
./install.sh
popd
 
# Install Ruby 1.9.3-p448:
rbenv install 1.9.3-p448
rbenv global 1.9.3-p448
 
# Rehash:
rbenv rehash
 
# Production installing gems skipping ri and rdoc
cat << EOF > /root/.gemrc
---
:sources:
- http://gems.rubyforge.org
- http://gems.github.com
gem: --no-ri --no-rdoc
EOF
 
# Restart shell or exit re-login
#exec $SHELL
