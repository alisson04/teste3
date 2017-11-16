<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!--AJAX-->
        <script type="text/javascript">
            jQuery(document).ready(function () {
                var sidebar = jQuery('#sidebar');
                var content = jQuery('#content');
                var other = jQuery('#other');

                request('index.php');

                function m_load(data)
                {
                    var text = jQuery('<div>' + data + '</div>');//forçando o parser

                    sidebar.html(text.find('#sidebar').html());
                    content.html(text.find('#content').html());
                    other.html(text.find('#other').html());

                    jQuery(document).attr('title', text.find('title').html());
                }
                function request(file)
                {
                    jQuery.ajax({
                        url: file,
                        success: function (data)
                        {
                            m_load(data);
                        }
                    });
                }
                jQuery('#menu a').click(function (e) {
                    e.preventDefault();
                    request(jQuery(this).attr('href'));
                });
            });

        </script>
    </head>
    <body>
        <ul id="menu">
            <li><a href="modelos/header.php">Home</a></li>
            <li><a href="index.php">Cadastro</a></li>
            <li><a href="modelos/footer.php">Contato</a></li>
        </ul><!-- /menu -->
        <div id="sidebar">

        </div><!-- /sidebar -->
        <div id="content">

        </div><!-- /content -->
        <div id="other">

        </div><!-- /other -->
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="_javascript/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"  crossorigin="anonymous"></script>
    </body>
</html>