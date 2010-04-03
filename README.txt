// $Id: README.txt,v 1.3 2009/07/11 02:44:13 posco Exp $

ABOUT
-----

This theme is designed to be a base theme in the style of Zen. Its main goal is
to re-write much of the Drupal core CSS to utilize the OOCSS framework that is
being developed by Nicole Sullivan. If used correctly, designers and module
developers can leverage the modularity of the framework to help reduce the size
of their CSS files and to also strengthen the underlying structure of their
HTML and CSS.

OOCSS can also act as a bridge for both front-end and back-end designers. Since
OOCSS can be described using languages such as UML, their is some common ground
that back-end and front-end teams can share.

The end result should be well-designed, faster, and more flexible themes for
Drupal.

DESIGN GOALS
------------

This theme will remain lean to allow designers to easily create sub-themes based
on it. In fact, I anticipate that the page.tpl.php file will be just a suggestion
of how a theme can use OOCSS and an easy jumping off point for designers to start
with. The real power of theme will be done in it's template.php, which will 
override many (if not all) of the core theme functions and templates in Drupal 
in order to use the OOCSS framework.

Contrib modules will need to be overridden by the designers. I am initially 
targeting Drupal core as I believe that is going to be a lot of work. In the
future I would hope to have support for common modules such as CCK and Views
built into the template.php file.

While the theme should remain lean, that doesn't mean that it should be ugly.
Once the HTML structure has been taken care of, the base theme will be
designed using some of the pre-made OOCSS module skins. This will keep this 
project more inline with the OOCSS' philosophy.

HELPING OUT
-----------

I am very open to help with this project. I have done web-design for many years,
but I'm most experienced with PHP. So, having some input on the CSS/HTML
from another perspective would be invaluable. If you would like to help develop 
and maintain this project, please contact me:

Twitter: @posco2k8
Drupal Username: posco
E-mail: posco2k5 AT gmail DOT com

Twitter: @voidfiles
Drupal Username: voidfles
E-mail: alex AT alexkessinger DOT net
