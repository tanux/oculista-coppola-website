/**
 * Created by JetBrains PhpStorm.
 * User: Gaetano Esposito
 * Date: 22/04/11
 * Time: 14.52
 * To change this template use File | Settings | File Templates.
 */
$(function() {
    $("#1, #2, #tre").lavaLamp({
        fx: "backout",
        speed: 700,
        click: function(event, menuItem) {
            return true;
        }
    });
});