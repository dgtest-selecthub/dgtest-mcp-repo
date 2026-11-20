fun greetUser(name: String): String {
    return "Hello from Kotlin, $name!"
}

fun main() {
    val repository = "language-test-repo"
    println(greetUser("GitHub"))
    println("Repository: $repository")
}
