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
        echo $_GET['pass'] == 'dsafdsaf'
            ? '987f9ebc44072eef9626308e319d1a45.html'
            : 'incorrect';
        break;
}
