<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/addproduct_wall.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <title>Product add</title>
</head>
<body>
    <article class="header_menu">
        <header>
            <div class="content">
                <div class="header_panel">
                    <div class="header_text-size">
                        <div class="header_text">Product Add</div>
                    </div>
                    <div class="header_btn">
                        <button type="button" id="add" class="add_btn">Add</button>
                        <button type="button" id="delete" class="delete_btn">Mas Delete</button>
                    </div>
                </div>
                <hr>
            </div>
        </header>
    </article>
    <div class="form_panel">
        <div class="content">
            <div class="product_info">
            <div class="product_sku" class="input_menu">
                    <div class="panel_position">
                        <div class="sku">SKU</div>
                    </div>
                    <input class="input">
                </div>
                <div class="product_name" class="input_menu">
                    <div class="panel_position">
                        <div class="name">Name</div>
                    </div>
                    <input class="input">
                </div>
                <div class="product_price" class="input_menu">
                    <div class="panel_position">
                        <div class="price">Price</div>
                    </div>
                    <input class="input">
                </div>
            </div>
            <div class="product_switch" class="input_menu">
                <div class="panel_position">
                    <div class="type_switch">Type Switch</div>
                </div>
                <select id="select-box1" class="select">
                    <option value="none">Type Switch</option>
                    <option value="dvd">DVD</option>
                    <option value="furnuture">Furniture</option>
                    <option value="book">Book</option>
                </select>
            </div>
        </div>
    </div>
    <article class="footer">
        <footer>
            <div class="content">
                <div class="footer_panel">
                    <hr>
                    <div class="footer_text-size">
                        <div class="footer_text">Scandiweb Test Assigment</div>
                    </div>
                </div>
            </div>
        </footer>
    </article>
</body>
</html>