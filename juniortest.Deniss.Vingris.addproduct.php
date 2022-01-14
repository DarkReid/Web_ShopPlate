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
    <title>Junior Test</title>
</head>
<body>
<article class="header_menu">
        <header>
            <div class="content">
                <div class="header_panel">
                    <div class="header_text-size">
                        <div class="header_text">Product List</div>
                    </div>
                    <div class="header_btn">
                        <a id="add" class="save_btn" href="#">Save</a>
                        <a id="delete" class="cancel_btn" href="#">Cancel</a>
                    </div>
                </div>
                <hr>
            </div>
        </header>
    </article>
    </article>
    <div class="form_panel">
        <div class="content">
            <div class="product_info">
            <div class="product_sku" class="input_menu">
                    <div class="panel_position">
                        <div class="text_type">SKU</div>
                    </div>
                    <input id="sku" class="input">
                </div>
                <div class="product_name" class="input_menu">
                    <div class="panel_position">
                        <div class="text_type">Name</div>
                    </div>
                    <input id="name" class="input">
                </div>
                <div class="product_price" class="input_menu">
                    <div class="panel_position">
                        <div class="text_type">Price</div>
                    </div>
                    <input id="price" class="input">
                </div>
            </div>
            <div class="product_switch" class="input_menu">
                <div class="panel_position">
                    <div class="text_type">Type Switch</div>
                </div>
                <select name="product" class="select" id="productType" onchange="selectedValue(this.id)">
                    <option value="none" disabled selected>Type Switch</option>
                    <option value="dvd">DVD</option>
                    <option value="furniture">Furniture</option>
                    <option value="book">Book</option>
                </select>
            </div>
                <div class="product_field">
                    <div class="dvd inv" id="DVD">
                        <div class="info_field">
                            <div class="text_type">Size (MB)</div>
                            <input type="text" class="input" id="size">
                        </div>
                        <div class="text_descrition">The DVD is a digital optical disc data storage format invented and developed in 1995 and released in late 1996. 
                            Currently allowing up to 17.08 GB of storage, the medium can store any kind of digital data and was widely used for software and other computer files as well as video programs watched using DVD players.  
                            The roles of DVDs have largely been replaced by solid-state drives and direct connection to the Internet for local storage, video streaming, and online gaming.
                        </div>
                    </div>
                    <div class="furniture inv" id="Furniture">
                        <div class="info_field">
                            <div class="text_type">Height (CM)</div>
                            <input type="text" class="input" id="height">
                        </div>
                        <div class="info_field">
                            <div class="text_type">Width (CM)</div>
                            <input type="text" class="input" id="width">
                        </div>
                        <div class="info_field">
                            <div class="text_type">Lenght (CM)</div>
                            <input type="text" class="input" id="lenght">
                        </div>
                        <div class="text_descrition">Furniture consists of large objects such as tables, chairs, 
                            or beds that are used in a room for sitting or lying on or for putting things on or in. 
                            Each piece of furniture in their home suited the style of the house.
                        </div>
                    </div>
                    <div class="book inv" id="Book">
                        <div class="info_field">    
                            <div class="text_type">Weight (KG)</div>
                            <input type="text" class="input" id="weight">
                        </div>
                            <div class="text_descrition">A book is a medium for recording information in the form of writing or images, 
                                typically composed of many pages bound together and protected by a cover.
                                The technical term for this physical arrangement is codex. 
                                In the history of hand-held physical supports for extended written compositions or records, the codex replaces its predecessor, the scroll.
                                A single sheet in a codex is a leaf and each side of a leaf is a page.</div>
                    </div>
                </div>
        </div>
    </div>
    <article class="footer footer_down">
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
    <script src="js_scripts/scripts.js"></script>
</body>
</html>