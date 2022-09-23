<?php
switch ($_GET['level']) {
    case 1:
        // df33a11afc88fc38539099b27ec89ff7 = Level 2
        echo $_GET['pass'] == 'null'
            ? 'df33a11afc88fc38539099b27ec89ff7.html'
            : 'incorrect';
        break;
    case 2:
        // 47f817e1588c77305b6997e6e07c9090 = Level 3
        echo $_GET['pass'] == 'wild'
            ? '47f817e1588c77305b6997e6e07c9090.html'
            : 'incorrect';
        break;
    case 3:
        // 881301b7eefadfa7f7b5453c749b804e = Level 4
        echo $_GET['pass'] == 'pRaL6y1s'
            ? '881301b7eefadfa7f7b5453c749b804e.html'
            : 'incorrect';
        break;
    case 4:
        // a782ab6d45f609eedf0d948ffe1604a3 = Level 5
        echo $_GET['pass'] == '\0'
            ? 'a782ab6d45f609eedf0d948ffe1604a3.html'
            : 'incorrect';
        break;
    // 745ca30961f76181c5d100b3b4bd902f = Level 6
    case 6:
        // 987f9ebc44072eef9626308e319d1a45 = Level 7
        echo $_GET['pass'] == '12345'
            ? '987f9ebc44072eef9626308e319d1a45.html'
            : 'incorrect';
        break;
    case 7:
        // 1e156077e765039e0c294e2d4bd982b9 = Level 8
        echo $_GET['pass'] == 'xA1oLq'
            ? '1e156077e765039e0c294e2d4bd982b9.html'
            : 'incorrect';
        break;
    case 8:
        // 6a8748ff2a49f969f70a92625581adde = Level 9
        echo $_GET['pass'] == 'BreakOut'
            ? '6a8748ff2a49f969f70a92625581adde.html'
            : 'incorrect';
        break;
    case 9:
        // bfb9ba72ec4f176f4147ba8abc2a559f = Level 10
        echo $_GET['pass'] == 'environment'
            ? 'bfb9ba72ec4f176f4147ba8abc2a559f.html'
            : 'incorrect';
        break;
}
