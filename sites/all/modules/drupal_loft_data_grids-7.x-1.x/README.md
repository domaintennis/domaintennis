##Summary
A module wrapper integrating [Loft Data Grids](https://github.com/aklump/loft_data_grids) with Drupal.

##Installation
1. Download and unzip this module into your modules directory.
2. Download [Loft Data Grids](https://github.com/aklump/loft_data_grids) from github and install in `sites/all/libraries` as `sites/all/libraries/loft_data_grids`.

## Important!  Please read regarding dependencies!
_Loft Data Grids uses several external libraries to provide the different export types.  It assumes you will use Composer to install these dependencies.  This module makes an exception if you want to use certain drupal library modules instead, such as PHPExcel.  It is the author's recommendation that you still go the route of installing these dependencies using Composer if you are able._

1. If you are familiar with [Composer](http://getcomposer.org) then you should follow the installation instructions in [Loft Data Grids](https://github.com/aklump/loft_data_grids) to obtain the dependencies.
2. If you are NOT familiar with [Composer](http://getcomposer.org) and you would RATHER use the [PHPExcel](https://drupal.org/project/phpexcel) Drupal module, you should install and enable that module before enabling this one.
3. Be aware that some of the Export types are not supported by Drupal if you do not go the Composer route, such as the `YAML` export type.
4. In the event that you install dependencies with both Composer AND you have the PHPExcel Drupal module enabled, this module will pull the PHPExcel library from the composer location, rather than the libraries folder.

##Installation (cont.)
1. Now go to Administer > Site Building > Modules and enable this module.
3. Visit `admin/reports/status` and confirm the library is being detected and loaded correctly.


##Usage
To use any of the classes in [Loft Data Grids](https://github.com/aklump/loft_data_grids) call the following two functions below to instantiate objects:

    <?php
    $data = loft_data_grids_export_data();
    $data->add('first', 'Aaron');
    $data->add('last', 'Klump');
    $output = loft_data_grids_exporter($data, 'CSVExporter')->export();
    ?>
    
Refer to the library for more info.  It also contains Doxygene docs.


##Contact
* **In the Loft Studios**
* Aaron Klump - Developer
* PO Box 29294 Bellingham, WA 98228-1294
* _aim_: theloft101
* _skype_: intheloftstudios
* _d.o_: aklump
* <http://www.InTheLoftStudios.com>