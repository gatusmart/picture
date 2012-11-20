# A sample Guardfile
# More info at https://github.com/guard/guard#readme

#guard 'sass', :input=> 'public/sass', :output => 'public/css'#, :style => :compressed
#guard 'coffeescript', :input => 'public/coffee', :output => 'public/js',:bare => true

guard 'compass' do
    watch(%r{public/sass/.+\.(sass|scss)})
end

# If you install livereload you can uncomment this
# and have guard watch your files for changes
# and then guard calles livereload to automatically reload
# your browser for you.
#
#guard 'livereload' do
#  watch(%r{application/views/.+/.+\.(php|html|twig)$})
#  watch(%r{application/controllers/(.+)\.php$})
#  watch(%r{application/controllers/(.+)/(.+)\.php$})
#  watch(%r{application/models/(.+)\.php$})
#  watch(%r{application/config/.+\.php$})
#  watch(%r{application/.+\.php$})
#  watch(%r{public/.+/.+\.(css|js)$})
#end

# Automatic UnitTesting with PHPUNit using guard-phpunit
# You need to have the rubygem "guard-phpunit" installed.
# In terminal type "gem install guard-phpunit".
# Uncomment the code below to enable automatic unit testing.
#
# guard 'phpunit', :tests_path => 'application/tests/*.php', :cli => '--colors' do
#   watch(%r{application/tests/(.+)\.php$})
# end
