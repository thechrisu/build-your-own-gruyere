# Build your own gruyere!
OWASP cheat sheets:
https://www.owasp.org/index.php/Cheat_Sheets

OWASP Top 10
https://www.owasp.org/index.php/Top_10_2013-Top_10

## List of exploitable things
### More formally, OWASP Application Security Verification Standard
[https://www.owasp.org/index.php/OWASP_Application_Security_Verification_Standard](https://www.owasp.org/index.php/OWASP_Application_Security_Verification_Standard)

### My loose list
- XSS - No input validation https://www.owasp.org/index.php/Input_Validation_Cheat_Sheet
  - DOM XSS --> in client
  - Persistent XSS --> on server
- Cookie hijacking
- SQL injection
  - Unsanitized parameters from JSON
- Clickjacking https://www.owasp.org/index.php/Clickjacking_Defense_Cheat_Sheet
- Cross-Site Request Forgery
- JSON Hijacking
- Not return Object in outside object of JSON
- Execute server-side code sent in AJAX request (or osmehting like that)
- Password exposure:
  - In URL
  - Stored in plaintext
  - Weak password requirements
  - Uses MD5/weak cryptography
- JS execution
  - Javascript Request to Vendor
- Network configuration mistakes
- Unsafe API --> e.g. don't let users mess around with your API
- File upload validation? 
- E-Mail validation https://www.owasp.org/index.php/Input_Validation_Cheat_Sheet
- Sequential numbering of snippets
## List of automated Pentesting tools
https://www.owasp.org/index.php/Appendix_A:_Testing_Tools
http://resources.infosecinstitute.com/14-popular-web-application-vulnerability-scanners/

## List of security libraries
XSS sanitizer https://github.com/cure53/DOMPurify
