<DOCTYPE! html>

    <head>
        <style>
            body {
                margin: 20px 30px;
            }
        </style>
        <script>
            function goBack() {
                window.history.back()
            }
        </script>
        <title>How Does The Events System Work?</title>
    </head>

    <body>
        <button onclick="goBack()">Click here to go back</button><code><center>How Does The Events System Work?</center><br />AppSeed's events system is a simple yet advanced system of protocol management. Using a family tree-type system, specific event types can be filled into each bubble. Events are Javascript snippets that, when connected, create a connected system.<br /><br />
        For example, if you make a button an event and you want that button to trigger a popup, you can add the first branch of the tree. This will be -button. This will let the system know that you are creating a button. Next, you will have to add a second branch. This will be -trigger -popup(=signup). This means that you are about to trigger something, the second part (-popup) is a popup. In the parathesis you see =signup. This tells the system to popup the signup form that you have created as an event in a separate event class.<br /><br />Events work as a way to organize functions in the app. Companies can create their own events with plugins and people can create custom plugins using our API.<br /><br />To add these buttons to your page, you need to add a plugin through the content page. You can do so by right clicking on a item and click "Manage Events". This will prompt you to select the event you'd like that item to execute.</code> </body>

    </html>