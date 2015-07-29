<?php

include "../src/Section.php";

\Valey\Components\Section::start("Legenda");

echo "Minha legenda esta aqui";

\Valey\Components\Section::end();



echo \Valey\Components\Section::get("Legenda");