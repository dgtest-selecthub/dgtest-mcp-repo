fn greet_user(name: &str) -> String {
    format!("Hello from Rust, {}!", name)
}

fn main() {
    let repository = "language-test-repo";
    println!("{}", greet_user("GitHub"));
    println!("Repository: {}", repository);
}
