# Front-End
## Technologies
the technologies used to develop the Qur'anic School Management System are:
* HTML (php mainly)
* CSS
* JavaScript
  
## Members
the developers working on Front End:
* MOHANNED KADACHE
* SAMAH IKRAM FAREZ
* LINA AHLEM BOUALAM

## Manager
* MOHANNED KADACHE

## Rules
read them carefully:
**Project Folder Structure:** the structure is as follows
* index.php
* assets
  * CSS (css files)
  * images (resource images)
  * js (JavaScript files)
* includes (php files)
* view: repititive compnents (like footer)
* md files (README.md...)

**Landing Page:** index.php
**GitHub:** First of all, you need to clone the GitHub repository in your local laptop. Before adding any feature or a file, create a branch specificto that named in the format `FIRSTNAME_this_feature`, for example: `MOHANNED_adding_student_main_page`. All that to ensure readale branches.
**HTML:** as you know, since we will need includings, we will be writing HTML code inside php files (except view components), thus, make sure to:
* Use HTML5 doctype (for the header component)
* Use semantic HTML, meaning, the use of HTML elements that carry a specific meaning or purpose, For example, do not use DIV tag with `class="navbar"`. Else, use the `<nav> ... </nav>` tag.
* Valid HTML, that is, to use the standard HTML that conforms to wenb standards
* Classes and IDs, use accurate naming of classes and ids for elements, especially DIV tags
* Identation, that is, avoid inline code
* Use comments when there is an ambiguity
* Consider using a Code formatter.

**CSS:** Make sure to
* Organize CSS files in a subfolder named CSS
* `general.css` should always be included in the header. Since it has the defined classes for buttons and such things. In order to include those classes directly in the button tags (or links).
* Each page must include the `general.css` alongside its specific styling file, for example `index.php` includes `general.css` and `landing.css`.
* **USE FLEXBOX PLEASE.** 
* **USE MEDIA QUERIES for resposivity.**
