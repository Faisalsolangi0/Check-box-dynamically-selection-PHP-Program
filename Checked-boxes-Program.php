<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
</head>

<body>
    <center>
        <form>
            <input type="checkbox" class="select_1" name="checked_all" onclick="selectAll(this)"> Select All:
            <hr>
            <input type="checkbox" name="box1" class="select" onclick="check_all()"> box 1:
            <br>
            <input type="checkbox" name="box2" class="select" onclick="check_all()">box 2:
            <br>
            <input type="checkbox" name="box3" class="select" onclick="check_all()">box 3:
            <br>
            <input type="checkbox" name="box4" class="select" onclick="check_all()">box 4:
            <br>
            <input type="checkbox" name="box5" class="select" onclick="check_all()">box 5:
        </form>

        <script>
            function selectAll(obj) {
                var all = document.getElementsByClassName("select");
                for (var a = 0; a < all.length; a++) {
                    // console.log(a);
                    // console.log(all[a]);
                    // all[a];
                    all[a].checked = obj.checked;
                }

            }
            function check_all() {
                var all = document.getElementsByClassName("select");
                var flag = true;
                for (var a = 0; a < all.length; a++) {
                    // console.log(a);
                    // console.log(all[a]);
                    // all[a];
                    // all[a].checked = obj.checked;

                    if (all[a].checked == false) {
                        flag = false;
                        break;
                    }
                }
                document.querySelector("input[name='checked_all']").checked = flag;
            }

        </script>
    </center>
</body>

</html>