[![No Maintenance Intended](http://unmaintained.tech/badge.svg)](http://unmaintained.tech/)

# DEPRECATED

This Craft CMS 2.x plugin is no longer supported, but it is fully functional, and you may continue to use it as you see fit. The license also allows you to fork it and make changes as needed for legacy support reasons.

# Disclosed Assets plugin for Craft CMS

Allow your clients to find asset sub-folders by disclosing them by default

![Screenshot](resources/screenshots/disclosedassets.png)

## Installation

To install Disclosed Assets, follow these steps:

1. Download & unzip the file and place the `disclosedassets` directory into your `craft/plugins` directory
2.  -OR- do a `git clone https://github.com/nystudio107/disclosedassets.git` directly into your `craft/plugins` folder.  You can then update it with `git pull`
3.  -OR- install with Composer via `composer require nystudio107/disclosedassets`
4. Install plugin in the Craft Control Panel under Settings > Plugins
5. The plugin folder should be named `disclosedassets` for Craft to see it.  GitHub recently started appending `-master` (the branch name) to the name of the folder for zip file downloads.

Disclosed Assets works on Craft 2.4.x, Craft 2.5.x and Craft 2.6.x.

## Disclosed Assets Overview

Disclosed Assets is a simple plugin that just ensures any Assets sub-folders are always disclosed by default. Many times, clients don't see the small `>` disclosure symbol, or have any idea what it does.

After Disclosed Assets is installed, all Assets sub-folders will be disclosed by default:

![Screenshot](resources/screenshots/disclosedassets.png)

## Configuring Disclosed Assets

There's nothing to configure.

## Using Disclosed Assets

To use it, just install it, and enjoy happy clients.

Tip: to *create* sub-folders, Control- or right-click on the Asset source name.

![Screenshot](resources/screenshots/subfolder-creation.png)

If you're using something like [craft-cpjs](https://github.com/lindseydiloreto/craft-cpjs), you can just add this line to your included AdminCP JavaScript to achieve the same effect that Disclosed Assets offers:

```
// Disclose the all the things!
$(document).ready(function() {
    var toggleState = false;
    $('div .toggle').click();
    window.setTimeout(function(event) {
        if (Garnish.Modal.visibleModal) {
            if (!toggleState) {
                $('div .toggle').click();
                toggleState = true;
            }
        } else {
            toggleState = false;
        }
    }, 1000);
});
```

## Disclosed Assets Roadmap

Some things to do, and ideas for potential features:

* Release it

Brought to you by [nystudio107](https://nystudio107.com)
