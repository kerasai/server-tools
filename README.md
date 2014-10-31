Install the PHP file somewhere in the webroot.

Place the git-pull file at /bin/git-pull and make it executable by the user or
groups which will need to run the operation.

Use visudo to make the following edits to the sudoers file:

  * Add a command alias

    Cmnd_Alias      GITPULL = /bin/git-pull, /usr/bin/whoami

  * Grant the user privilege.

    www-data ALL=(ALL) NOPASSWD: GITPULL

Some servers are configured to deny sudo access to non-TTY users. If you get an
error indicating you cannot execute the script due to no tty present, comment 
out the line which reads:

  Defaults    requiretty
