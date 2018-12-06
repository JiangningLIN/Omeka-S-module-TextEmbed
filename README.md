# Text Embed (for Omeka S)

An Omeka S module to embed Texts directly in file or item pages.

Embedding on public item pages will only occur if the site's "Embed media on
item pages" setting is enabled.

For the time being, this module simply uses an `iframe` pointing to the text file, relying on the browser to do the rendering itself. You can choice two modes (`Mode Nuit` / `Mode Normal`) in reading.

Installation
-------------

* From the zip

Download the last release [`TextEmbed.zip`] from the list of releases (the master does not contain the dependencies), uncompress it in the 'modules' directory, and rename the module folder 'TextEmbed'.

* From the source and for development:

If the module was installed from the source, check if the name of the folder of the module is `TextEmbed`, go to the root of the module, and run either:

```
  composer install
````
The install it like any other Omeka Module.

Use
--------------
You need to add new item: `item`--> `Add new item`--> `Value`--> `Media`--> `Upload`--> `Choisir un fichier`--> `Add` 

If item successfully created, you will get an message `Item successfully created. Add another item?`. 

The file `.txt` name is displayed in the right area, you can click it to read.
