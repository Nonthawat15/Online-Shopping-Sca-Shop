const puppeteer = require('puppeteer');

let browser;
let page;

beforeAll(async () => {
    browser = await puppeteer.launch();
    page = await browser.newPage();
    await page.goto('http://localhost/project/register.php');
});

afterAll(async () => {
    await browser.close();
});

describe('Registration Form', () => {
    test('Empty form submission', async () => {
        await page.click('button[name=reg_user]');
        await page.waitForSelector('.error');
        const errorMessage = await page.evaluate(() => document.querySelector('.error').innerText);
        expect(errorMessage).toContain('required');
    });

    test('Mismatched passwords', async () => {
        await page.type('input[name=fname]', 'John');
        await page.type('input[name=lname]', 'Doe');
        await page.type('input[name=phone]', '1234567890');
        await page.type('input[name=email]', 'john.doe@example.com');
        await page.type('input[name=password_1]', 'password');
        await page.type('input[name=password_2]', 'password123');
        await page.click('button[name=reg_user]');
        await page.waitForSelector('.error');
        const errorMessage = await page.evaluate(() => document.querySelector('.error').innerText);
        expect(errorMessage).toContain('passwords do not match');
    });

    test('Existing email', async () => {
        await page.type('input[name=fname]', 'Jane');
        await page.type('input[name=lname]', 'Doe');
        await page.type('input[name=phone]', '9876543210');
        await page.type('input[name=email]', 'existing@example.com');
        await page.type('input[name=password_1]', 'password');
        await page.type('input[name=password_2]', 'password');
        await page.click('button[name=reg_user]');
        await page.waitForSelector('.error');
        const errorMessage = await page.evaluate(() => document.querySelector('.error').innerText);
        expect(errorMessage).toContain('already exists');
    });

    // Add more test cases as needed
});
