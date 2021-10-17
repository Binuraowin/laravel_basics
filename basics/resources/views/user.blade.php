<html>
    <body>
        <form action="submit" method="post">
            @csrf
            <input type="text" name="name" id="name" placeholder="company name">
            <input type="text" name="address" id="" placeholder="company address">
            <button type="submit">Send</button>
        </form>
    </body>
</html>