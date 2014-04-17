<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hands on Contacts</title>
    <style>
        table thead td { font-weight: bold; }
        .module { margin-bottom:  2em; }

    </style>
</head>
<body>

<h1>Contacts</h1>

<form id="addContact" class="module">
    <div>
        <label for="first_name">First Name: </label>
        <input id="first_name" name="first_name" type="text"/>
    </div>

    <div>
        <label for="last_name">Last Name: </label>
        <input id="last_name" name="last_name" type="text"/>
    </div>
    <div>
        <label for="email_address">Email Address:</label>
        <input id="email_address" name="email_address" type="text"/>
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea>
    </div>
    <div>
        <input type="submit" value="Add Contact"/>
    </div>
</form>

<table id="allContacts" class="module">
    <thead>
        <tr>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email Address</td>
            <td>Description</td>
            <td>Config</td>
        </tr>
    </thead>
</table>

<div id="editContact">

</div>

<script id="allContactsTemplate" type="text/x-handlebars-template">
    <td><%= first_name %></td>
    <td><%= last_name %></td>
    <td><%= email_address %></td>
    <td><%= description %></td>
    <td><a href="#contacts/<%= id %>/edit" class="edit">Edit</a></td>
    <td><a href="#contacts/<%= id %>" class="delete">Delete</a></td>
</script>

<script id="editContactTemplate" type="text/x-handlebars-template">
    <h2>Edit Contact <%= first_name %> <%= last_name %> </h2>
    <form id="editContact">
        <div>
            <label for="edit_first_name">First Name: </label>
            <input id="edit_first_name" name="edit_first_name" type="text" value="<%= first_name %>"/>
        </div>

        <div>
            <label for="edit_last_name">Last Name: </label>
            <input id="edit_last_name" name="edit_last_name" type="text" value="<%= last_name %>" />
        </div>
        <div>
            <label for="edit_email_address">Email Address:</label>
            <input id="edit_email_address" name="edit_email_address" type="text" value="<%= email_address %>"/>
        </div>
        <div>
            <label for="edit_description">Description:</label>
            <textarea name="edit_description" id="edit_description" ><%= description %></textarea>
        </div>
        <div>
            <input type="submit" value="Edit Contact"/>
            <button type="button" class="cancel">Cancel</button>
        </div>
    </form>
</script>

<script src="js/jquery.js"></script>
<script src="js/underscore.js"></script>
<script src="js/backbone.js"></script>
<script src="js/main.js"></script>
<script src="js/models.js"></script>
<script src="js/collections.js"></script>
<script src="js/views.js"></script>
<script src="js/router.js"></script>

<script>
    new App.Router;
    Backbone.history.start();

    App.contacts = new App.Collections.Contacts;
    App.contacts.fetch().then(function(){
        new App.Views.App({ collection: App.contacts });
    });

</script>

</body>
</html>
