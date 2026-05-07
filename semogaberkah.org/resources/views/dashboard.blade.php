<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Settings UI</title>
<script src="lib/jquery.js"></script>
<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f0f0f0; /* outer border look */
    /*display: flex;*/
    justify-content: left;
    /*align-items: center;*/
    height: 100vh;
}

/* Container */
.app {
    width: 100wh;
    /* height: auto; */
    background-color: #f0f0f0;
}

/* Header */
.header {
    background-color: #2fa4c7;
    color: white;
    padding: 2rem 0 0 2rem;
    height: 3rem;
    font-size: 24px;
    font-weight: bold;
    top: 0;
    position: sticky;
}

/* Card */
.card {
    /*background-color: #d9d9d9;*/
    border-radius: 25px;
    height: 100vh;
    top:5rem;
    margin: 15px;
    padding: 10px 3rem 0 0;
    position: sticky;
}

/* List items */
.item {
    display: flex;
    /* justify-content: space-between; */
    width: 15rem;
    align-items: center;
    padding: 14px;
    font-size: 15px;
    color: #333;
}

.item:hover {
    background-color: #d9d9d9;
    border-radius: 25px;
}

.item-clicked {
    background-color: #adfdff;
    border-radius: 25px;
}

#content {
    padding: 1rem 4rem 2rem 2rem;
    overflow-y: scroll;
}

</style>

</head>

<body>

<div class="app">
    <div class="header">Settings</div>
    <div style="display: flex">
        <div class="card">
            <div class="item">Profile</div>
            <div class="item">Notification Settings</div>
            <div class="item">Account Security</div>
            <div class="item">Privacy Policy</div>
            <div class="item">Help</div>
            <div class="item">Delete Account</div>
            <div class="item" style="color: red">Logout</div>
        </div>
        <div id="content">
            <div id="profile">
                <h2>Profile</h2>
                <form action="" method="post">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                    <br><br>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                    <br><br>
                    <label for="nrp">NRP</label>
                    <input type="text" name="nrp" id="nrp">
                    <br><br>
                    <label for="email">Email</label>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    let item = null;
    item = $(".item").click(function(e, sebelum=item){
        if(sebelum != null){
            $(sebelum).removeClass("item-clicked");
        }
        $(e.target).addClass("item-clicked");
        return e.target;
    });
    $.ajax({
        type: "post",
        url: "/settings-profile",
        data: "data",
        dataType: "dataType",
        success: function (response) {
            
        }
    });
</script>
</body>
</html>
