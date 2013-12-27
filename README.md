#Simple Admin
####An admin package for Laravel 4
Here is an [example](http://simple-admin.iliketheideaof.us/) hosted on my own site. The password is private, but you can view the login url at [/simple-admin](http://simple-admin.iliketheideaof.us/simple-admin).


##Introduction
This package was built for easy html editing of selected areas. This can save a developer from countless hours of editing solid chunks of content. The backend is styled with twitter bootstrap, uses javascript for adding new content areas, and can manage any amount of areas. It depends on MySQL.


##Installation
> ###Notes:
> Simple Admin requires with a  `users` table with `username, password, and email` columns already created and an `account_type` column in your Laravel database. When you run the migration, it will append an `account_type` column to your `users` table  seed the database with a default admin. If you do not have a users table, please refer to the documentation located at the bottom of this document. If you already have a `users` table and do not wish to modify your schema, do not run the migrations, and contact the package author or simply append the `account_type` column yourself.

1 - Add the following line to the `require` section of `composer.json`:

```json
{
    "require": {
        "fuhton/simple-admin": "dev-master"
    }
}
```


2 - Add `Fuhton\SimpleAdmin\SimpleAdminServiceProvider` to the service provider list in `app/config/app.php`.

3 - Run `php artisan config:publish fuhton/simple-admin`.

4 - Run `php artisan asset:publish fuhton/simple-admin`.

5 - Run `php artisan migrate --package=fuhton/simple-admin`.

6 - Sign into your website at `/simple-admin` (ie. github.com/simple-admin) with the credentials:
```
username: simple-admin
password: letmein
```

7 - Immediately change the password, username, and update the email address.


##Usage
####View Section
To create an editable area viewable in your selected view add the following code:
```
{{ SimpleAdmin::content('YOUR CONTENT NAME') }}
```
Also be sure you are using a blade template.B1;2c

####Admin Section
The admin section allows for HTML input. When creating a new content area, simple click the "Add New Content Area" button, fill in the approriate information, and click submit.

Information includes:

* Name
- The slug that is called by your view ( ie. 'YOUR CONTENT NAME' as noted above). It does not matter how long this is, but must be an exact match

* Content
- The content displayed by the shortcode. Inline HTML that is rendered strictly.

##Customization
At this time there is a limited amount of customizable options.

##Support
If you have a support issues please submit a ticket and I will hopefully respond quickly. I am the primary developer and would like to see a long life for this project.

Below are a list of helpful solutions

####Creating a `users` table
Login to your MySQL server and run this command.
```
CREATE TABLE users (
   id INT NOT NULL AUTO_INCREMENT,
   username varchar(100) NOT NULL,
   email varchar(100) NOT NULL,
   password varchar(100) NOT NULL,
   created_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
   updated_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
   PRIMARY KEY (id)
);
```
