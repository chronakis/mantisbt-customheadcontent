# Custom Head Content plugin for MantisBT
Copyright (c) 2014 - Yiannis Chronakis

Released under the [GNU Affero General Public License v3](http://opensource.org/licenses/AGPL-3.0)


## Description

Small plugin for mantis bug tracker to allow adding custom content to the html head tag


## Requirements

The plugin requires [Mantis](http://www.mantisbt.org/) version 1.2.0 or higher

It is not compatible with MantisBT 1.3 or higher, as it has not been tested with it.


## Installation

1. Download or clone a copy of the [plugin's code](https://github.com/chronakis/mantisbt-customheadcontent).
2. Copy the plugin (the `customHeadContent/` directory) into your Mantis
   installation's `plugins/` directory.
3. While logged into your Mantis installation as an administrator, go to
   *Manage -> Manage Plugins*.
4. In the *Available Plugins* list, you'll find the *Custom Head Content* plugin;
   click the **Install** link.
5. Create a file in the root of your mantis directory called "customHeadContent.html".
   The contents of this file will be added to the head section of every page.

## Support

Submit Bug reports on the
[Github issues tracker](https://github.com/chronakis/mantisbt-customheadcontent/issues).

The latest source code can found on
[Github](https://github.com/chronakis/mantisbt-customheadcontent).
