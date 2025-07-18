function isLeapYear(year) {
    // A year is a leap year if:
    // 1. It's divisible by 4, but not by 100, OR
    // 2. It's divisible by 400
    return (year % 4 === 0 && year % 100 !== 0) || (year % 400 === 0);
}

// Example usage:
const testYears = [2000, 1900, 2020, 2021, 2024, 2100];
testYears.forEach(year => {
    console.log(`${year} is a leap year? ${isLeapYear(year)}`);
});
