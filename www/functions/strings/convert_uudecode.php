<?php use \Doc\helpers\HTML;
HTML::h1('convert_uudecode');


$str = 'M3&]R96T@:7!S=6T@9&]L;W(@<VET(&%M970L(`T*#0IC;VYS96-T971U<B!A M9&EP:7-C:6YG(&5L:70L(\'-E9"!D;R!E:75S;6]D(\'1E;7!O<B`@#0H-"FEN M8VED:61U;G0@=70@;&%B;W)E(&5T(&1O;&]R92!M86=N82!A;&EQ=6$N("`- M"@T*570@96YI;2!A9"!M:6YI;2!V96YI86TL(\'%U:7,@;F]S=\')U9"`@#0H- M"F5X97)C:71A=&EO;B!U;&QA;6-O(&QA8F]R:7,@;FES:2!U="!A;&EQ=6EP M(&5X(&5A(&-O;6UO9&\@8V]N<V5Q=6%T+B`@#0H-"D1U:7,@875T92!I<G5R M92!D;VQO<B!I;B!R97!R96AE;F1E<FET(&EN(\'9O;\'5P=&%T92!V96QI="`@ M#0H-"F5S<V4@8VEL;\'5M(&1O;&]R92!E=2!F=6=I870@;G5L;&$@<&%R:6%T M=7(N("`-"@T*17AC97!T975R(\'-I;G0@;V-C865C870@8W5P:61A=&%T(&YO M;B!P<F]I9&5N="P@(`T*#0IS=6YT(&EN(&-U;\'!A(\'%U:2!O9F9I8VEA(&1E M<V5R=6YT("`-"C]M;V1U<SUA<V0-"FUO;&QI="!A;FEM(&ED(&5S="!L86)O $<G5M+@`` ` ';
HTML::dump(convert_uudecode($str));