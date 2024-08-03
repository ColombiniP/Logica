const assert = require('assert');

const dias = function(meses) {
    return meses * 30;
}

try {
    assert.equal(210, dias(7));
} catch(e) {
    console.log(e);
}