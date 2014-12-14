#P4 - Task Manager

##Live URL

http://p4.nearsightedninja.me

##Description

This is a simple task manager site that includes:

    User authentication so different users can have their own task lists.
    A page to display all incomplete tasks.
    A page to display all completed tasks.
    A page to add new tasks.
    A page to edit the content of existing tasks.
    A page to delete a task.

My tables are users table, tasks table, and a suggestions table.
Users can only see their own tasks, but they can see all submitted suggestions.

##Demo

I demo'd my project during the 12/13/14 section. 

##Details for teaching team

As of 12/14/14, I cannot get the application to work correctly on the live server. 
I suspect that it's having issues with routes via POST method but I am not sure. 
I thought seeding a user would help (email address = dwa15@dwa15.dwa15; password = dwa15dwa15).  
It did not.  The application works fine on the local server as proven during section.

##Outside code

https://github.com/susanBuck/foobooks/blob/master/app/controllers/UserController.php
https://github.com/susanBuck/foobooks/blob/master/app/database/migrations/2014_11_07_001312_create_users_table.php