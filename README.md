# hideauthor-plugin
This plugin hides the author profiles for users who have the role "Hidden Author" and redirects visitors to a custom URL when they try to access the profile pages of such authors. The plugin intercepts the request just before loading the template and performs the redirection if the specified conditions are met.

In order for the #hideauthor-plugin to work you will need Members Plugin installed. (A user and role management plugin that puts you in full control of your site's permissions. Members plugin allows you to edit your roles and their capabilities, clone existing roles, assign multiple roles per user, block post content, or even make your site completely private.)

STEPS:
1. Install Members https://wordpress.org/plugins/members/ ;
2. Add a new role called Hidden Author (hidden_author) and assign it to the user whose profile URL you want to redirect.
3. Edit line 19 and enter your url (wp_redirect( 'https://wwww.exampleurl.com' change this with your website link );
4. Zip the plugin and install it.

   
