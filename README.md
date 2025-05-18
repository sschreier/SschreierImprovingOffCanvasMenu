# An extension to improve the off-canvas menu for Shopware 6

An extension to _improve the off-canvas menu_. 

For example, a _menu text can be shown to the right of the icon in the header_. 

In addition, you can _display a home link as first link_. 

For the _menu items_, the _font size can be set_ if required and the _border below the respective menu items can be removed_. 

In the _sublevels you have the option to hide the back link_. 

If necessary, the _menu can be displayed in the smartphone view in full width_ and the _font size of the close button can be adjusted_. 

It is also possible to _hide the languages and currencies area_ and _show the menu items of the footer service navigation_. 

You can also _choose whether each category should be hidden in the off-canvas menu_.

## Possible configurations for the menu text to the right of the icon in the header
- select if the menu text should be shown
- set the menu text via snippet

## Possible configurations for the home link
- select if the home link should be shown as first link
- set the link via snippet
- set the text via snippet

## Possible configurations for the menu items
- select the font size (*1)
- select if a border below each menu item should be shown

## Possible configurations for the sublevels
- set the text of the link to return to the overview via snippet
- select if the back link should be shown

## Further configurations
- select if the menu in the smartphone view should be shown in full width
- select the font size of the close button (*1)
- select if the languages and currencies area should be shown
- select if the menu items of the footer service navigation should be shown
- set the text above the category list via snippet

## Available snippets
- sschreier.improvingoffcanvasmenu.general.homeLink
- sschreier.improvingoffcanvasmenu.general.homeLinkText

## Some changes in the settings within the configuration are not immediately visible in the frontend of the shop
After changing settings specifically for the appearance (*1), the theme must be recompiled, for example by saving the theme in the administration:
1. Switch to "Content" and "Themes"
2. Select the active theme
3. Click on the button "Save"

## How to install the extension
### via zip and console (recommended)
1. Download the latest _SschreierImprovingOffCanvasMenu-master.zip_.
2. Unzip the zip file and rename the folder to _SschreierImprovingOffCanvasMenu_.
3. Move the folder to the project folder _custom/plugins/_ .
4. Connect to the console via ssh:

```
bin/console plugin:refresh
bin/console plugin:install --activate SschreierImprovingOffCanvasMenu
```

### via composer
1. Add the repository URL to the composer.json of the project
```
"repositories": [
    ...,
    {
        "type": "vcs",
        "url": "https://github.com/sschreier/SschreierImprovingOffCanvasMenu"
    }
],
```

2. Connect to the console via ssh and install the plugin via the command
```
composer require sschreier/sschreierimprovingoffcanvasmenu
bin/console plugin:refresh
bin/console plugin:install --activate SschreierImprovingOffCanvasMenu
```

### via https://packagist.org
- Connect to the console via ssh and install the plugin via the command
```
composer require sschreier/sschreierimprovingoffcanvasmenu
bin/console plugin:refresh
bin/console plugin:install --activate SschreierImprovingOffCanvasMenu
```

### via zip upload
1. Download the latest _SschreierImprovingOffCanvasMenu-master.zip_.
2. Unzip the zip file and rename the folder to _SschreierImprovingOffCanvasMenu_.
3. Zip the folder to _SschreierImprovingOffCanvasMenu.zip_.
4. Upload the zip in the Shopware Administration.
5. Install & Activate the extension.

#### extension update (zip)
1. Download the latest _SschreierImprovingOffCanvasMenu-master.zip_.
2. Unzip the zip file and rename the folder to _SschreierImprovingOffCanvasMenu_.
3. Zip the folder to _SschreierImprovingOffCanvasMenu.zip_.
4. Upload the zip in the Shopware Administration.
5. Update the extension.

## Images

### the off-canvas menu displayed in the smartphone view in full width and with bigger font size

![the off-canvas menu displayed in the smartphone view in full width and with bigger font size](https://www.sebastianschreier.de/plugins/SschreierImprovingOffCanvasMenu/SschreierImprovingOffCanvasMenu-Image1.jpg)

### a sublevel of the off-canvas menu without back link

![a sublevel of the off-canvas menu without back link](https://www.sebastianschreier.de/plugins/SschreierImprovingOffCanvasMenu/SschreierImprovingOffCanvasMenu-Image2.jpg)

### the off-canvas menu with the menu items of the footer service navigation

![the off-canvas menu with the menu items of the footer service navigation](https://www.sebastianschreier.de/plugins/SschreierImprovingOffCanvasMenu/SschreierImprovingOffCanvasMenu-Image3.jpg)

### the off-canvas menu with the languages and currencies area

![the off-canvas menu with the languages and currencies area](https://www.sebastianschreier.de/plugins/SschreierImprovingOffCanvasMenu/SschreierImprovingOffCanvasMenu-Image4.jpg)

### the off-canvas menu without borders below the respective menu items

![the off-canvas menu without borders below the respective menu items](https://www.sebastianschreier.de/plugins/SschreierImprovingOffCanvasMenu/SschreierImprovingOffCanvasMenu-Image5.jpg)

### extension configuration part 1

![extension configuration part 1](https://www.sebastianschreier.de/plugins/SschreierImprovingOffCanvasMenu/SschreierImprovingOffCanvasMenu-Image6.jpg)

### extension configuration part 2

![extension configuration part 2](https://www.sebastianschreier.de/plugins/SschreierImprovingOffCanvasMenu/SschreierImprovingOffCanvasMenu-Image7.jpg)

### extension configuration part 3

![extension configuration part 3](https://www.sebastianschreier.de/plugins/SschreierImprovingOffCanvasMenu/SschreierImprovingOffCanvasMenu-Image8.jpg)

### extension configuration part 4

![extension configuration part 4](https://www.sebastianschreier.de/plugins/SschreierImprovingOffCanvasMenu/SschreierImprovingOffCanvasMenu-Image9.jpg)


### category custom field in shopware administration

![category custom field in shopware administration](https://www.sebastianschreier.de/plugins/SschreierImprovingOffCanvasMenu/SschreierImprovingOffCanvasMenu-Image10.jpg)
