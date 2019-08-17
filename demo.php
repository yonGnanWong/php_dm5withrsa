<?php
/**
 * Created by IntelliJ IDEA.
 * User: yongnan_wong
 * Date: 2019-08-17
 * Time: 11:59
 */
require_once './handler/md5rsa.php';

$pub_rsa = 'xxxxxxxxxxI0WSPhkBOB4FjPrSkHrDcU/wwmw40e/Y4ecMiYKqFEgGMAIs2P06niCH7N9QLM3mzMBSxnNq++fLbC46KVjvw2lKunpo3YHJQAay7MbyyChqH+xl1xYZs3NKyHNowIDAQAB';
$rsa = "xxxxxxxxxxxNBgkqhkiG9w0BAQEFAASCAmIwggJeAgEAAoGBAJXa/2HQKQlCCfZ3cKhmEhuMxgC1HF02HKdNrj98EZMbJw8C6HZ4q4GqKldkhsHxPgxzSXKZwE4vndX3ShssYJnOl00Ufwt3FpsB0Zbepa8YjlDw/Llbz/4ygv/In1UeSvVmTvXfs0Jg3LGW5rkSJnjS08UL9b3kNJ7o4iwn1ZTzAgMBAAECgYAotme9nj0X284zHL4JsjlnLLa6iHndRQ9B0NPvQXjQ24agCG05io0l3CJGvfPyiuUNouCoducNFtitwdJrUYIovM9lPYVqBjXzr1DHALpFRJC/ke7lRt+khoQjFjFKaUfwdbq5I27FkNveO577yhhvjQVx5PoVSMOxRQw745qbIQJBAMTZP0UpHbXKYtiAUd0qA4D83VOAm/dmDiZkODYvB2IyJUTPUMoicdJ9JOdFJTWYVSiBcTIW5oX70rMFgFl4G9ECQQDC4sKdP2taJoHm+IYo2Jhiq9yt/5k0UhQw+dHKP6POucrqmdCPnyZIcmXUaCy904SnEn2R5QUip3qazXXKVQmDAkEAwpPv+6Ap0wFr9Y/Z2+Dkt8K70AeHo+PIRuC3w692//SLbFn1BOlJU4QKT2TE5BZgzvosdxO16GjEm9rrRQT5kQJBALErKtd/fx2eojuStYxOlAIn0WARXHr3H0oC4pil0EowF2u9V6Apg8kazr4R0pLjxtWH9sX6WPfPH6O5oxrEwfcCQQCxaqmXfpECmZY82HyBaxqzMfG1TS7GkhfOpaPbgyjEE99ievWifpvHAnWSHw8mp+l5VXGF7qXw71FDullWrPG7";
$sign = "xxxxxxxxxxxxxxxcc7oSYcrLyBL2l5VNgMFY67JarJK9v9dvpy0y4U3shdQ+tHgs1VfMxlVAN7bLEl1ddxEOmluu3FSf7s54RDw5Feixyn1feZmM88JKg0mq4MtXmc1+Duw+GuOve2mmpA87JIAyvuhU3rCmunrjEH4ShFe4g=";
$data = 'xxxxxxxxxxxxxL0xIlCctmodHMhyYclnIyNhGFpKp+bUf6adJOY0GBGC8zAe1QHPGurq36dAk1JBd3snoHYgx2+bpp6TSr1N4zPb2pJlMPzn9lU0bgRy4IjumWyswuV6ca0ilk+QRvKCnHMN8I7bPpSTxSoi6nQQnUVgyJmyG07roqp/8kWCi++egc/YxSIHeys8Hke7LaHWIsCJi+oc6cQX9c1laQUfcvdXa9Zkw7vyRTInZM9XPJf7jD20tjP2NgLg8QfsBKbncPU1LWOKLcMoDcRJ33QELmFwAe6B6PhMpF/MAUj10BFqdYBd1QT+Pkoq1jeuMOLG10Ww==';

$handler = new Md5RSA();
$key = $handler->isValid($data,$sign,$pub_rsa);
var_dump($key);
