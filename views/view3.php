<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            body {
                font: 12pt consolas;
            }
        </style>
    </head>
    <body>
        <p style="text-align: justify; margin-left: 20px; margin-right: 20px">
            <?php
                $templates = array(
                    array(
                        "Id"        => 1,
                        "ParentId"  => 0,
                        "Atribut"   => "",
                        "Text"      => "Корневой шаблон №1"
                    ),
                    array(
                        "Id"        => 2,
                        "ParentId"  => 1,
                        "Atribut"   => "<%TITLE%>",
                        "Text"      => "Первый подшаблон <%CONTENT%>"
                    ),
                    array(
                        "Id"        => 3,
                        "ParentId"  => 1,
                        "Atribut"   => "<%TITLE%>",
                        "Text"      => "Второй подшаблон <%CONTENT%>"
                    ),
                    array(
                        "Id"        => 4,
                        "ParentId"  => 2,
                        "Atribut"   => "<%CONTENT%>",
                        "Text"      => "Шаблон 4"
                    ),
                    array(
                        "Id"        => 5,
                        "ParentId"  => 3,
                        "Atribut"   => "<%CONTENT%>",
                        "Text"      => "Шаблон 5"
                    ),
                    array(
                        "Id"        => 6,
                        "ParentId"  => 2,
                        "Atribut"   => "<%CONTENT%>",
                        "Text"      => "Шаблон 6"
                    ),
                    array(
                        "Id"        => 7,
                        "ParentId"  => 0,
                        "Atribut"   => "",
                        "Text"      => "Корневой шаблон №2"
                    )
                );
                
                echo '<pre>';
                print_r($templates);
                echo '<br>';
                print_r(getTemplate(2));
                echo '</pre>';
                
                function searchTemplate($id) {
                    global $templates;
                    return $templates[$id - 1];
                }
                
                function getTemplate($id) {
                    $arr1 = searchTemplate($id);
                    $k1 = $arr1['ParentId'];                    
                    if ($k1 !== 0) {
                        $arr2 = searchTemplate($k1);
                        $arr2['Atribut'] = $arr1['Text'];
                        $k2 = $arr2['ParentId'];
                        if ($k2 !== 0) {
                            return getTemplate($k1);                             
                        } else {
                            return $arr2;
                        }
                    } else {
                        return $arr1;
                    }                                                            
                }
            ?>
        </p>
    </body>
</html>
