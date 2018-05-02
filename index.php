<?php
    $headers = 'https://damcms.roidna.com/wp-json/wp/v2/header';
    $modules = 'https://damcms.roidna.com/wp-json/wp/v2/module';
    $footers = 'https://damcms.roidna.com/wp-json/wp/v2/footer';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ROI·DNA Draggable Module Tool</title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css" media = "screen, print" />
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
</head>

<body>
    <div class = "wrapper">
        <header>
            <div class = "row align-justify">
                <div class = "columns">
                    <img src = "img/logo.svg" class = "logo" />
                </div>

                <div class = "columns right">
                    <a href = "#" class = "button pill small" data-open = "save-dam">Save</a>
                    <a href = "#" class = "sign-out"><i class = "fa fa-user-o"></i> Sign Out</a>
                </div>
            </div>
        </header>

        <div id = "menu">
            <ul>
                <li>
                    <div class = "menu-icon"><i class = "custom-circle_green"></i></div>
                    <div class = "menu-content">
                        <a href = "#" class = "menu-open-link">
                            Headers

                            <div class = "menu-open-close">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="22px" height="22px" viewBox="0 0 512 512" style="enable-background:new 0 0 25 25;" xml:space="preserve"><g><g><path class="st0" d="M403.1,108.9c-81.2-81.2-212.9-81.2-294.2,0s-81.2,212.9,0,294.2c81.2,81.2,212.9,81.2,294.2,0 S484.3,190.1,403.1,108.9z M390.8,390.8c-74.3,74.3-195.3,74.3-269.6,0c-74.3-74.3-74.3-195.3,0-269.6s195.3-74.3,269.6,0 C465.2,195.5,465.2,316.5,390.8,390.8z"/></g><polygon class="st0" points="340.2,160 255.8,244.2 171.8,160.4 160,172.2 244,256 160,339.8 171.8,351.6 255.8,267.8 340.2,352 352,340.2 267.6,256 352,171.8    "/></g></svg>
                            </div>
                        </a>

                        <div class = "menu-open-content row first">
                            <div class = "small-12 search">
                                <input type = "text" class = "header-filter header-tag-filter" placeholder = "Search by number or tag" />
                            </div>
                        </div>

                        <div class = "menu-open-content row">
                            
                            <?php if (!empty($headers)) : 
                                $post_json  = file_get_contents($headers); 
                                $post_array = json_decode($post_json, true);
                                ?>
                                <?php foreach ( $post_array as $header ) : ?>
                                    <div class = "small-12 modules header-modules header-tags" data-type = "header">
                                        <span style="display:none">
                                                <?php foreach ( $header['acf']['tags'] as $tag){ echo($tag['name']); }; ?>
                                        </span> 
                                        <h5><?php echo($header['title']['rendered']); ?></h5>
                                           <img src="<?php echo($header['acf']['image_upload']['url']);?>" />
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </li>

                <li>
                    <div class = "menu-icon"><i class = "custom-circle_green"></i></div>
                    <div class = "menu-content">
                        <a href = "#" class = "menu-open-link">
                            Modules

                            <div class = "menu-open-close">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="22px" height="22px" viewBox="0 0 512 512" style="enable-background:new 0 0 25 25;" xml:space="preserve"><g><g><path class="st0" d="M403.1,108.9c-81.2-81.2-212.9-81.2-294.2,0s-81.2,212.9,0,294.2c81.2,81.2,212.9,81.2,294.2,0 S484.3,190.1,403.1,108.9z M390.8,390.8c-74.3,74.3-195.3,74.3-269.6,0c-74.3-74.3-74.3-195.3,0-269.6s195.3-74.3,269.6,0 C465.2,195.5,465.2,316.5,390.8,390.8z"/></g><polygon class="st0" points="340.2,160 255.8,244.2 171.8,160.4 160,172.2 244,256 160,339.8 171.8,351.6 255.8,267.8 340.2,352 352,340.2 267.6,256 352,171.8    "/></g></svg>
                            </div>
                        </a>

                        <div class = "menu-open-content row">
                            <div class = "small-12 search">
                                <input type = "text" class = "main-filter main-tag-filter" placeholder = "Search by number or tag" />
                            </div>
                            
                            <?php if (!empty($modules)) : 
                                $post_json  = file_get_contents($modules); 
                                $post_array = json_decode($post_json, true);
                                ?>
                                <?php foreach ( $post_array as $module ) : ?>
                                    <div class = "small-12 modules main-modules main-tags" data-type = "module">
                                        <span style="display:none">
                                                <?php foreach ( $module['acf']['tags'] as $tag){ echo($tag['name']); }; ?>
                                        </span> 
                                        <h5><?php echo($module['title']['rendered']); ?></h5>
                                           <img src="<?php echo($module['acf']['image_upload']['url']);?>" />
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </li>

                <li>
                    <div class = "menu-icon"><i class = "custom-circle_green"></i></div>
                    <div class = "menu-content">
                        <a href = "#" class = "menu-open-link">
                            Footers

                            <div class = "menu-open-close">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="22px" height="22px" viewBox="0 0 512 512" style="enable-background:new 0 0 25 25;" xml:space="preserve"><g><g><path class="st0" d="M403.1,108.9c-81.2-81.2-212.9-81.2-294.2,0s-81.2,212.9,0,294.2c81.2,81.2,212.9,81.2,294.2,0 S484.3,190.1,403.1,108.9z M390.8,390.8c-74.3,74.3-195.3,74.3-269.6,0c-74.3-74.3-74.3-195.3,0-269.6s195.3-74.3,269.6,0 C465.2,195.5,465.2,316.5,390.8,390.8z"/></g><polygon class="st0" points="340.2,160 255.8,244.2 171.8,160.4 160,172.2 244,256 160,339.8 171.8,351.6 255.8,267.8 340.2,352 352,340.2 267.6,256 352,171.8    "/></g></svg>
                            </div>
                        </a>

                        <div class = "menu-open-content row">
                            <div class = "small-12 search">
                                <input type = "text" class = "footer-filter footer-tag-filter" placeholder = "Search by number or tag" />
                            </div>
                            
                            <?php if (!empty($footers)) : 
                                $post_json  = file_get_contents($footers); 
                                $post_array = json_decode($post_json, true);
                                ?>
                                <?php foreach ( $post_array as $footer ) : ?>
                                    <div class = "small-12 modules footer-modules footer-tags" data-type = "footer">
                                        <span style="display:none">
                                                <?php foreach ( $footer['acf']['tags'] as $tag){ echo($tag['name']); }; ?>
                                        </span> 
                                        <h5><?php echo($footer['title']['rendered']); ?></h5>
                                           <img src="<?php echo($footer['acf']['image_upload']['url']);?>" />
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <main id = "main" class = "text-center">
            <h2>Draggable Module Tool</h2>
            
            <div class = "row target-body">
                <div id = "header" class = "destination small-12"><h2>Header</h2></div>                    
                <div id = "module" class = "destination small-12"><h2>Modules</h2></div>
                <div id = "footer" class = "destination small-12"><h2>Footer</h2></div>
             </div>   
        </main>
    </div>

    <div id = "save-dam" class = "tiny reveal" data-reveal>
        <form class = "row">
            <div class = "small-12">
                <label>Save as</label>
            </div>

            <div class = "small-12">
                <input type = "text" placeholder = "Lorem ipsum" />
            </div>

            <div class = "small-12">
                <button type = "submit" class = "button pill">Save</button>
            </div>

            <div class = "small-12">
                <button class = "button pill cancel">Cancel</button>
            </div>
        </form>
    </div>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>

    <script>
        $(document).foundation();
        var header     = new TinyFilter(),
            main       = new TinyFilter(),
            footer     = new TinyFilter();
        
        header.init({
            filter_class:     'header-filter',
            filter_class:     'header-tag-filter',
            content_class:    'header-modules',
            content_class:    'header-tags',
            search_type:      'loose'
        });
        main.init({
            filter_class:     'main-filter',
            filter_class:     'main-tag-filter',
            content_class:    'main-modules',
            content_class:    'main-tags',
            search_type:      'loose'
        });
        footer.init({
            filter_class:     'footer-filter',
            content_class:    'footer-modules',
            content_class:    'footer-modules',
            content_class:    'footer-tags',
            search_type:      'loose'
        });
    </script>
</body>
</html>