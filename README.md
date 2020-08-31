# bootstrapdash_wms_admin_panel

## Requirements

For quick and easy setup for this project, you will need to install a LAMP Stack either MAMP, XAMP, WAMP

1. Download and Install a LAMP Stack (Choose one of the above)

2. Locate the htdocs folder for your specific LAMP Stack installation

## Setup Instructions

1. Clone this this repo (you can clone it to your desktop)

2. Open the cloned repo folder and copy the app folder into the htdocs folder for your LAMP stack.

3. Start your LAMP Stack servers (mySQL, Apache)

4. Open PhpMyAdmin

5. **Database Setup**

    a. Create a new database called `wms_db`
    b. Select the database
    c. Click the import tab
    d. Browse to the `repo_folder/app/database/wms_db/wms_db.sql` and import the `wms_db.sql` file. This will create tables for the `wms_db` with sample data.
    e. create a new database user with rights to perform Create Read Update Delete operations on `wms_db` database.
       a. User name: `wms_user`
       b. Host name: `local` or `localhost`
       c. Password: `wms_password`
       d. Authentication Plugin: `Native MySQL authentication`
       
 6. Navigate to the app in your browser (Instructions may be different for each LAMP Stack).
