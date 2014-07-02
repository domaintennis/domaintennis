-- SUMMARY --

This module extends the Field Group module and provides a "Table" group format,
which renders the fields it contains in a table. The first column of the table
contains the field labels and the second column contains the rendered fields.
In the future it will be possible to reverse the axes of the table, as well as
some other sorcery.

-- COMPARISON WITH OTHER MODULES --

Field group multiple: this module also offers a "Table" group formatter, but it
was designed to deal with multivalued fields. As such, it renders every value of
multivalued fields in their own table cell, every row containing value n of all
the fields in the group. This is an awesome way to unclutter multivalued fields,
but it also means the module requires all fields it contains to have the same
cardinality and that some field types don't work very well. In contrast, this
module will render the field value normally, embedded in a single table cell.
For more information see: http://drupal.org/node/1480204

-- REQUIREMENTS --

 * Field Group (http://drupal.org/project/field_group)

-- INSTALLATION --

 * Ensure the module's dependencies are met
 * Install the module by placing it in sites/all/modules and enabling it
 * Profit!

-- CONFIGURATION --

Go to any "manage fields" or "manage display" page where you would like to add
your field group, and create a field group as usual. Now you can choose "Table"
as the group format.

-- KNOWN ISSUES --

 * Nesting tables currently doesn't work.

-- HISTORY --

http://drupal.org/node/1320780
