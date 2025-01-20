const puppeteer = require('puppeteer');

let browser;
let page;

beforeAll(async () => {
    browser = await puppeteer.launch();
    page = await browser.newPage();
    await page.goto('http://localhost/project/login.php');
});

afterAll(async () => {
    await browser.close();
});

describe('Login Form', () => {
    test('Successful login', async () => {
        // Fill out the form with valid login credentials
        await page.type('input[name=email]', 'test@example.com');
        await page.type('input[name=password]', 'password');

        // Submit the form
        await page.click('button[name=login_user]');

        // Wait for navigation to complete
        await page.waitForNavigation();

        // Assert that the user is redirected to the index page or any other success page
        const url = page.url();
        expect(url).toMatch(/index\.php/);
    });

    test('Invalid login', async () => {
        // Fill out the form with invalid login credentials
        await page.type('input[name=email]', 'invalid@example.com');
        await page.type('input[name=password]', 'invalidpassword');

        // Submit the form
        await page.click('button[name=login_user]');

        // Wait for the error message to appear
        await page.waitForSelector('.error');

        // Assert that the error message indicates invalid login
        const errorMessage = await page.evaluate(() => document.querySelector('.error').innerText);
        expect(errorMessage).toContain('Wrong Email or Password');
    });

    // Add more test cases to cover other scenarios or edge cases
});
