const repository: string = "language-test-repo";

function greetUser(name: string): string {
    return `Hello from TypeScript, ${name}!`;
}

console.log(greetUser("GitHub"));
console.log(`Repository: ${repository}`);
