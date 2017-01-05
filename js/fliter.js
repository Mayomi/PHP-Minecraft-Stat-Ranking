/**
 * Created by 蒋天蓓 on 2017/1/5 0005.
 */
var ilist = new ArrayMap();
ilist.put(1, '<font color=#FF000><b>1</b></font>');
ilist.put(2, '<font color=#3333FF><b>2</b></font>');
ilist.put(3, '<font color=#996600><b>3</b></font>');
avalon.filters.index = function ($value) {
    if (ilist.has($value)) {
        return ilist.get($value);
    }
    return $value;
}
//显示头像
var showhead = true;
//API地址
//var api = "https://mcapi.ca/avatar/";
var api = "https://minotar.net/avatar/";//备用地址
//特殊用户
var ulist = new ArrayMap();
ulist.put('Mayomi', '<font color=#FF0000><b>Mayomi</b></font> <img src="img/gm.png" height="20" width="20" title="官方成员" />');
ulist.put('Xiao_Lins', '<font color=#FF0000><b>Xiao_Lins</b></font> <img src="img/gm.png" height="20" width="20" title="官方成员" />');
avalon.filters.prefix = function ($value) {
    var $result = $value;
    if (ulist.has($value)) {
        $result = ulist.get($value);
    }
    return showhead ? '<img src="' + api + $value + '/20">' + $result : $result;
}