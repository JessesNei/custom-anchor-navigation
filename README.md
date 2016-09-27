# custom-anchor-navigation

## Add FE-Module to Theme

Add an listing Module to your theme and add the following values:



### Module configuration:

Table:
tl_article

Fields:
id,title,alias,cssID,titleAnchor

Condition:
pid='{{page::id}}' AND published=1 AND showAnchor=1

Searchable fields:
leer

Order by:
sorting ASC

Items per page:
0

Details page fields:
leer

Details page condition:
leer


### Template settings:
List template: 
list_anchorNavigation

Details page template:
indo_default

### Expert settings:
CSS ID / class:
anchor_navigation


-pullrequest -gitflow -testchange