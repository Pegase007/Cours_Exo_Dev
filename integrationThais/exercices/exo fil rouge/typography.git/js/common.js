
var hyphenatorSettings = {
        selectorfunction: function () {
                return $('p, q').get();
        }
};
Hyphenator.config(hyphenatorSettings);
Hyphenator.run();
