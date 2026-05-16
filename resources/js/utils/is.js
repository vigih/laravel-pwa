
export default class Is {

    /**
    * Checks if a value is a string
    * @param {any} value - The value to check
    * @returns {boolean} True if the value is a string, false otherwise
    * @example
    * Util.isString('hello'); // true
    * Util.isString(123); // false
    */
    static isString(value) {
        return typeof value === 'string';
    }

    /**
     * Checks if a value is a valid number (excluding NaN)
     * @param {any} value - The value to check
     * @returns {boolean} True if the value is a number and not NaN, false otherwise
     * @example
     * Util.isNumber(42); // true
     * Util.isNumber(NaN); // false
     */
    static isNumber(value) {
        return typeof value === 'number' && !isNaN(value);
    }

    /**
     * Checks if a value is a boolean
     * @param {any} value - The value to check
     * @returns {boolean} True if the value is a boolean, false otherwise
     * @example
     * Util.isBoolean(true); // true
     * Util.isBoolean('true'); // false
     */
    static isBoolean(value) {
        return typeof value === 'boolean';
    }

    /**
     * Checks if a value is undefined
     * @param {any} value - The value to check
     * @returns {boolean} True if the value is undefined, false otherwise
     * @example
     * let x;
     * Util.isUndefined(x); // true
     * Util.isUndefined(null); // false
     */
    static isUndefined(value) {
        return typeof value === 'undefined';
    }

    /**
     * Checks if a value is null
     * @param {any} value - The value to check
     * @returns {boolean} True if the value is null, false otherwise
     * @example
     * Util.isNull(null); // true
     * Util.isNull(undefined); // false
     */
    static isNull(value) {
        return value === null;
    }

    /**
     * Checks if a value is a Symbol
     * @param {any} value - The value to check
     * @returns {boolean} True if the value is a Symbol, false otherwise
     * @example
     * Util.isSymbol(Symbol('foo')); // true
     * Util.isSymbol('symbol'); // false
     */
    static isSymbol(value) {
        return typeof value === 'symbol';
    }

    /**
     * Checks if a value is a BigInt
     * @param {any} value - The value to check
     * @returns {boolean} True if the value is a BigInt, false otherwise
     * @example
     * Util.isBigInt(10n); // true
     * Util.isBigInt(10); // false
     */
    static isBigInt(value) {
        return typeof value === 'bigint';
    }

    /**
     * Checks if a value is NaN (more reliable than global isNaN)
     * @param {any} value - The value to check
     * @returns {boolean} True if the value is NaN, false otherwise
     * @example
     * Util.isNaN(NaN); // true
     * Util.isNaN('string'); // false
     */
    static isNaN(value) {
        return Number.isNaN(value);
    }

    /**
     * Checks if a value is a finite number
     * @param {any} value - The value to check
     * @returns {boolean} True if the value is a finite number, false otherwise
     * @example
     * Util.isFinite(42); // true
     * Util.isFinite(Infinity); // false
     */
    static isFinite(value) {
        return Number.isFinite(value);
    }

    /**
     * Checks if a value is an array
     * @param {any} value - The value to check
     * @returns {boolean} True if the value is an array, false otherwise
     * @example
     * Util.isArray([1, 2, 3]); // true
     * Util.isArray({length: 0}); // false
     */
    static isArray(value) {
        return Array.isArray(value);
    }

    /**
     * Checks if a value is an object (excluding null and arrays)
     * @param {any} value - The value to check
     * @returns {boolean} True if the value is an object but not null or array
     * @example
     * Util.isObject({}); // true
     * Util.isObject([]); // false
     */
    static isObject(value) {
        return value !== null && typeof value === 'object' && !this.isArray(value);
    }

    /**
     * Checks if a value is a plain object (created by {} or new Object)
     * @param {any} value - The value to check
     * @returns {boolean} True if the value is a plain object
     * @example
     * Util.isPlainObject({}); // true
     * Util.isPlainObject(new Date()); // false
     */
    static isPlainObject(value) {
        if (typeof value !== 'object' || value === null) return false;
        const proto = Object.getPrototypeOf(value);
        return proto === null || proto === Object.prototype;
    }

    /**
     * Checks if a value is a Date object
     * @param {any} value - The value to check
     * @returns {boolean} True if the value is a Date
     * @example
     * Util.isDate(new Date()); // true
     * Util.isDate('2023-01-01'); // false
     */
    static isDate(value) {
        return value instanceof Date;
    }

    /**
     * Checks if a value is a RegExp object
     * @param {any} value - The value to check
     * @returns {boolean} True if the value is a RegExp
     * @example
     * Util.isRegExp(/abc/); // true
     * Util.isRegExp('abc'); // false
     */
    static isRegExp(value) {
        return value instanceof RegExp;
    }

    /**
     * Checks if a value is a Map
     * @param {any} value - The value to check
     * @returns {boolean} True if the value is a Map
     * @example
     * Util.isMap(new Map()); // true
     * Util.isMap({}); // false
     */
    static isMap(value) {
        return value instanceof Map;
    }

    /**
     * Checks if a value is a Set
     * @param {any} value - The value to check
     * @returns {boolean} True if the value is a Set
     * @example
     * Util.isSet(new Set()); // true
     * Util.isSet([]); // false
     */
    static isSet(value) {
        return value instanceof Set;
    }

    /**
     * Checks if a value is a WeakMap
     * @param {any} value - The value to check
     * @returns {boolean} True if the value is a WeakMap
     * @example
     * Util.isWeakMap(new WeakMap()); // true
     * Util.isWeakMap(new Map()); // false
     */
    static isWeakMap(value) {
        return value instanceof WeakMap;
    }

    /**
     * Checks if a value is a WeakSet
     * @param {any} value - The value to check
     * @returns {boolean} True if the value is a WeakSet
     * @example
     * Util.isWeakSet(new WeakSet()); // true
     * Util.isWeakSet(new Set()); // false
     */
    static isWeakSet(value) {
        return value instanceof WeakSet;
    }

    /**
     * Checks if a value is a Promise
     * @param {any} value - The value to check
     * @returns {boolean} True if the value is a Promise
     * @example
     * Util.isPromise(Promise.resolve()); // true
     * Util.isPromise({then: () => {}}); // false
     */
    static isPromise(value) {
        return value instanceof Promise;
    }

    /**
     * Checks if a value is a function
     * @param {any} value - The value to check
     * @returns {boolean} True if the value is a function
     * @example
     * Util.isFunction(() => {}); // true
     * Util.isFunction(class {}); // true
     */
    static isFunction(value) {
        return typeof value === 'function';
    }

    /**
     * Checks if a value is an async function
     * @param {any} value - The value to check
     * @returns {boolean} True if the value is an async function
     * @example
     * Util.isAsyncFunction(async () => {}); // true
     * Util.isAsyncFunction(() => {}); // false
     */
    static isAsyncFunction(value) {
        return value instanceof (async () => { }).constructor;
    }

    /**
     * Checks if a value is a generator function
     * @param {any} value - The value to check
     * @returns {boolean} True if the value is a generator function
     * @example
     * Util.isGeneratorFunction(function* () {}); // true
     * Util.isGeneratorFunction(() => {}); // false
     */
    static isGeneratorFunction(value) {
        return value instanceof (function* () { }).constructor;
    }

    /**
     * Checks if a value is an Error object
     * @param {any} value - The value to check
     * @returns {boolean} True if the value is an Error
     * @example
     * Util.isError(new Error()); // true
     * Util.isError('error'); // false
     */
    static isError(value) {
        return value instanceof Error;
    }

    /**
     * Checks if a value is an arguments object
     * @param {any} value - The value to check
     * @returns {boolean} True if the value is an arguments object
     * @example
     * function test() {
     *   return Util.isArguments(arguments); // true
     * }
     */
    static isArguments(value) {
        return Object.prototype.toString.call(value) === '[object Arguments]';
    }

    /**
     * Checks if a value is a Buffer (Node.js environment)
     * @param {any} value - The value to check
     * @returns {boolean} True if the value is a Buffer
     * @example
     * Util.isBuffer(Buffer.from('hello')); // true (in Node.js)
     */
    static isBuffer(value) {
        return typeof Buffer !== 'undefined' && Buffer.isBuffer(value);
    }

    /**
     * Memeriksa apakah sebuah nilai adalah tipe primitif
     * @param {any} value - Nilai yang akan diperiksa
     * @returns {boolean} True jika nilai tersebut adalah primitif
     * @example
     * Util.isPrimitive('hello'); // true
     * Util.isPrimitive({}); // false
     */
    static isPrimitive(value) {
        return value === null ||
            (typeof value !== 'object' && typeof value !== 'function');
    }

    /**
     * Validates if a string is a valid JSON
     * @param {string} str - The string to validate
     * @returns {boolean} True if the string is valid JSON, false otherwise
     * @example
     * Util.isValidJSON('{"key": "value"}'); // true
     * Util.isValidJSON('Invalid JSON'); // false
     */
    static isValidJSON(str) {
        try {
            JSON.parse(str);
            return true;
        } catch (e) {
            return false;
        }
    }

    /**
     * Deep merges two objects recursively
     * @param {Object} target - The target object to merge into
     * @param {Object} source - The source object to merge from
     * @returns {Object} The merged object
     * @example
     * const merged = Util.merge({a: 1}, {b: 2});
     * // Returns {a: 1, b: 2}
     */
    static merge(target, source) {
        if (!this.isObject(target) || !this.isObject(source)) {
            return target;
        }

        Object.keys(source).forEach(key => {
            const targetValue = target[key];
            const sourceValue = source[key];

            if (this.isObject(targetValue) && this.isObject(sourceValue)) {
                target[key] = this.merge(Object.assign({}, targetValue), sourceValue);
            } else if (this.isArray(targetValue) && this.isArray(sourceValue)) {
                target[key] = targetValue.concat(sourceValue);
            } else {
                target[key] = sourceValue;
            }
        });

        return target;
    }


    /**
     * Filters the properties of an object based on the provided keys.
     *
     * @static
     * @param {Object} source - The source object to filter.
     * @param {Array<string>} keys - An array of keys to filter the object by.
     * @returns {Object} A new object containing only the properties specified by the keys.
     *
     * @example
     * const source = { a: 1, b: 2, c: 3 };
     * const keys = ['a', 'c'];
     * const result = MyClass.filter(source, keys);
     * console.log(result); // { a: 1, c: 3 }
     */
    static filter(source, keys) {
        if (this.isObject(source) && this.isArray(keys)) {
            var newOption = Object.entries(source).filter(([key]) => keys.includes(key))
            return Object.fromEntries(newOption);
        }
        return source;
    }
}
