Description
-----------
This module help admins or user with similar admin privileges to change PHP runtime variables without changing php.ini file.

Features:
---------
  - You can configure 4 PHP runtime options:
    - File Upload Limit
    - Memory Limit
    - Maximum Execution Time Limit
    - Maximum Input Variable Limit

    Every option of this module solves common and unique PHP configuration problems:
    a) Use "File Upload Limit" option to increase file upload limit globally.
    b) Use "Memory Limit" option if you receive "Allowed memory size of xxxxx bytes exhausted".
    c) Use "Maximum Execution Time Limit" option if you receive "maximum execution time of xx seconds exceeded".
    d) Use "Maximum Input Variable Limit (POST Limit)" if you receive this error even nobody else is editing same node "The content on this page has either been modified by another user, or you have already submitted modifications using this form. As a result, your changes cannot be saved". 
       For more information please read http://techrappers.com/post/14771/how-remove-edit-lock-node-drupal
  - Provides a simple UI to turn on/off options individually.
  - Provides separate permissions for this module on permissions page(/admin/people/permissions).
  - It will help you to put configuration in your .htaccess file, so that you don't need to change your php.ini file and restart apache server.
  - Good for shared environments where users do not have access to php.ini file.
  - Useful for users with similar admin privileges which do not have permissions to go to module page.
  - For File Upload Limit, You can increase global file limit on website but still can configure some fields different from this global limit. So if you define your 
  file upload size of your field in field configuration( Administration » Structure » Content types » YOUR CONTENT TYPE NAME » Manage fields) and edit that field,
  you can still define your custom limit in "Maximum upload size" section. But this limit should be less than the global limit that you set in this module.
  For example if you define global limit on this module's configuration page as 500 MB, you can still configure any other field separately in "Maximum upload size"
  section but your limit should be less than global file limit which is 500 MB in this case.
  
  
Use Cases:
---------
  - This module is idle for the situation when you are hosting multiple websites on a single server and you want to increase the file limit inside one of your
  website. 
  - It is also useful in case when you are on shared server where you don't have access to php.ini file.
  - Even on dedicated server it can help because you don't need to modify your php.ini file and restart the server. It reduces the overhead of locating, changing
  and restarting the server.
  - Sometimes website owner do not have permission to go to modules page. Developers can assign permissions for this module to website owners so that they 
  can turn on/off this module by clicking checkbox and increase the global limit.
  - It can also be used on occasional purposes when you need to upload a huge file only few times (once or twice a year). In that case changing php.ini file
  is not a good approach.
  - You are receiving an error "The content on this page has either been modified by another user, or you have already submitted modifications using this form. As a result, your changes cannot be saved". In this case you might need to increase "Maximum Input Variable Limit". See here http://techrappers.com/post/14771/how-remove-edit-lock-node-drupal

Installation
------------
  Just drop this module to modules directory(/sites/all/modules).

Configuration
-------------
  To enable this module, visit administer -> modules, and enable PHP Runtime Configurator.

  NOTE: Initially module's name was "Change File Upload Limit" but it’s been extended to include some other PHP options and hence renamed to "PHP Runtime Configurator".
  To maintain backward compatibility and align with its previous version, URL and permission machine name is not changed.


