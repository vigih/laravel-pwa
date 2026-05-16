"use strict";

/**
  * @param {CallableFunction} callback
  * @param {number} ms
  * @return {Promise<void>}
 */
export const timeOut = (ms, callback) => new Promise(resolve => setTimeout(resolve, ms)).then(callback);


/**
 * @param {number} ms
 * @return {Promise<void>}
 */
export const delay = (ms) => new Promise(resolve => setTimeout(resolve, ms))
