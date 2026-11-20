# Additional GitHub Language Samples

This folder contains small source files in additional programming languages
for testing GitHub's List Repository Languages API.

Upload the source files (not just this README) to the root of the repository.
Commit them to the default branch, then call:

GET /repos/{owner}/{repo}/languages

GitHub Linguist determines which languages are counted and reports byte counts.
The returned language set and byte counts are determined by GitHub; they are
not guaranteed to include every file in this folder.
