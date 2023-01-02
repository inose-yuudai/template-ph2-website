// @ts-check

class Student {
    /**
     * @constructor
     * @param {string} name
     * @param {number} age
     * @param {number} sex
     */
    constructor(name, age, sex) {
        this.name = name;
        this.age = age;
        this.sex = sex;
    }

    /**
     * @return {string} - 名前を返す
     */
    get name() {
        return this.name;
    }

    /**
     * @return {number} - 年齢を返す
     */
    get age() {
        return this.age
    }

    /**
     * @return {number} - 性別を返す
     */
    get sex() {
        return this.sex
    }

    /**
     * @param {string}name  - 名前
     * @return {string}
     */
    set name(name) {
        this.name = name;
    }

    /**
     * @param {number}age - 年齢
     * @return {number}
     */
    set age(age) {
        this.age = age;
    }

    /**
     * @param {number} sex  - 性別
     * @return {number}
     */
    set sex(sex) {
        this.sex = sex;
    }
}

const student = new Student("生徒", 20, 1);
student.name;
student.age;
student.sex;
student.name = "新しい名前";
student.age = 32;
student.sex = 1;