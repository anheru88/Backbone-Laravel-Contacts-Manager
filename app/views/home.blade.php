<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hands on Contacts</title>
    <style>
        table thead td { font-weight: bold; }
        #addContact { margin-bottom:  2em; }
    </style>
</head>
<body>

<h1>Contacts</h1>

<form id="addContact">
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

<table id="allContacts">
    <thead>
        <tr>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email Address</td>
            <td>Description</td>
        </tr>
    </thead>
</table>

<script id="allContactsTemplate" type="text/x-handlebars-template">
    <td><%= first_name %></td>
    <td><%= last_name %></td>
    <td><%= email_address %></td>
    <td><%= description %></td>
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
