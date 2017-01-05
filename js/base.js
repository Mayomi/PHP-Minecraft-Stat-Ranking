/**
 * Created by 蒋天蓓 on 2017/1/5 0005.
 */
//JS字典实现
function ArrayMap() {
    this.data = [];
    this.put = function (key, value) {
        this.data[key] = value;
    };
    this.get = function (key) {
        return this.data[key];
    };
    this.remove = function (key) {
        this.data[key] = null;
    };
    this.has = function (key) {
        return this.data[key] != null;
    }
    this.isEmpty = function () {
        return this.data.length == 0;
    };
    this.size = function () {
        return this.data.length;
    };
}