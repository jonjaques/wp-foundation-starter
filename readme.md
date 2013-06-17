## Development Environment

### Grunt / Compass
For CSS / JS development, we use [Grunt.js](http://gruntjs.com/) to concatenate
javascript, and compile SCSS into CSS. This requires the [Node.js](http://nodejs.org/)
and [Ruby](http://rubyinstaller.org/) runtimes (any recent version will do). For
Mac you can skip the Ruby Install.

After those, you'll want to install Grunt.

For Windows, you should run Command Prompt as Administrator.

```> npm install -g grunt-cli```

For Mac / Linux, use

```$ sudo npm install -g grunt-cli```

(No more sudo)

```
$ gem install compass
...
$ gem install modular-scale
...
$ gem install zurb-foundation
```

Now, ```cd``` into your project directory, and run ```npm install```.

Finally, run ```grunt```. This will start watching your directory for JS/CSS
changes, and automatically concat/compile them as needed.

You can specify additional tasks as needed in the ```Gruntfile```.
