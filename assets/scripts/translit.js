String.prototype.replaceAll = function (a, b) { return this.split(a).join(b) };
var translite_lat = {
    А: "A", а: "a",
    Ә: "Á", ә: "á",
    Б: "B", б: "b",
    Д: "D", д: "d",
    Е: "E", е: "e",
    Ф: "F", ф: "f",
    "Ғ": "Ǵ", "ғ": "ǵ",
    Г: "G", г: "g",
    Х: "H", х: "h",
    І: "I", i: "i",
    І: "I", i: "i",
    И: "I", и: "ı",
    Й: "I", й: "ı",
    H: "H", h: "h",
    Ж: "J", ж: "j",
    К: "K", к: "k",
    Л: "L", л: "l",
    М: "M", м: "m",
    Н: "N", н: "n",
    Ң: "Ń", ң: "ń",
    О: "O", о: "o",
    Ө: "Ó", ө: "ó",
    П: "P", п: "p",
    Қ: "Q", қ: "q",
    Р: "R", р: "r",
    Ш: "Sh", ш: "sh",
    С: "S", с: "s",
    Т: "T", т: "t",
    Ұ: "U", ұ: "u",
    Ү: "Ú", ү: "ú",
    В: "V", в: "v",
    Ы: "Y", ы: "y",
    У: "Ý", у: "ý",
    З: "Z", з: "z",
    Ч: "Ch", ч: "ch",
    Э: "E", э: "e",
    Щ: "", щ: "",
    ь: '',
    ъ: '',

};

var translite_kaz = {
    "Á": "Ә", "á": "ә",
    "A": "А", "a": "а",
    "B": "Б", "b": "б",
    "D": "Д", "d": "д",
    "E": "Е", "e": "е",
    "F": "Ф", "f": "ф",
    "Ǵ": "Ғ", "ǵ": "ғ",
    "G": "Г", "g": "г",
    "H": "Х", "h": "х",
    "I": "І", "i": "i",
    "I": "І", "i": "i",
    "I": "Й", "ı": "й",
    "I": "И", "ı": "и",
    "H": "H", "h": "h",
    "J": "Ж", "j": "ж",
    "K": "К", "k": "к",
    "L": "Л", "l": "л",
    "M": "М", "m": "м",
    "Ń": "Ң", "ń": "ң",
    "N": "Н", "n": "н",
    "Ó": "Ө", "ó": "ө",
    "O": "О", "o": "о",
    "P": "П", "p": "п",
    "Q": "Қ", "q": "қ",
    "R": "Р", "r": "р",
    "Sh": "Ш", "sh": "ш",
    "S": "С", "s": "с",
    "T": "Т", "t": "т",
    "Ú": "Ү", "ú": "ү",
    "U": "Ұ", "u": "ұ",
    "V": "В", "v": "в",
    "Ý": "У", "ý": "у",
    "Z": "З", "z": "з",
    "Ch": "Ч", "ch": "ч",
    "Y": "Ы", "y": "ы",
    "": "Щ", "": "щ"

};

var _translate_kaz = {
    "Iá": "Иә", "ıá": "иә",
    "Ia": "Я", "ıa": "я",
    "Iý": "Ю", "ıý": "ю",
};
var _translate_lat = {
    Я: "Ia", я: "ıa",
    Ю: "Iý", ю: "ıý",
    Ц: "Ts", ц: "ts"

};

var convert_to_lat = function (text) {
    for (var key in _translate_lat) {
        text = text.replaceAll(key.toString(), _translate_lat[key]);
    }

    for (key in translite_lat) {
        text = text.replaceAll(key.toString(), translite_lat[key]);
    }

    return text;
};

var convert_to_kaz = function (text) {
    for (var key in _translate_kaz) {
        text = text.replaceAll(key.toString(), _translate_kaz[key]);
    }

    for (key in translite_kaz) {
        text = text.replaceAll(key.toString(), translite_kaz[key]);
    }

    return text;
};