<?php
class user_module
 {
            public $con= null;
            public function __construct($con)
            {
                    $this->con=$con;
            }
            
              function country()
	    {
		$stmt = $this->con->prepare("SELECT * FROM country");
		$stmt->execute();
		$count=$stmt->rowCount();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function register($data)
	    {
		$stmt=$this->con->prepare("INSERT INTO user (title, first_name, last_name, fullname, dob, country, email, notification, text, emailn, message, address, address_option, address_options, city, state, postcode, name, password, securityn, time, odds, bonus, security) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		return $stmt->execute($data);
                
	    }
           
            function login($data)
	    {
		$stmt = $this->con->prepare("SELECT * FROM user WHERE email=? AND password=? AND status=1");
		$stmt->execute($data);
		$count=$stmt->rowCount();
		if($count==1)
		{
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		else
		return 0;
	    }
            function checkemail($data)
	    {
		$stmt = $this->con->prepare("select * from user where email=?");
		$stmt->execute($data);
		return $countuser=$stmt->rowCount();
	    }
             function orgprofile($data)
	    {
		$stmt = $this->con->prepare("SELECT * FROM user WHERE user_id=?");
		$stmt->execute($data);
		$count=$stmt->rowCount();
		if($count==1)
		{
			return $stmt->fetchAll(PDO::FETCH_BOTH);
		}
		else
		return 0;
	    }
            function updatuser($data)
	    {
		$stmt=$this->con->prepare("UPDATE user SET name=?, email=?, mobile_number=? WHERE user_id=?");
		return $stmt->execute($data);
	    } 
            function upbalance($data)
	    {
		$stmt=$this->con->prepare("UPDATE user SET balance=? WHERE user_id=?");
		return $stmt->execute($data);
	    } 
            function mailcheck($data)
	    {
		$stmt = $this->con->prepare("SELECT * FROM  user where security=?");
		$stmt->execute($data);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
		
	    }
            function userupdate($data)
	    {
		$stmt=$this->con->prepare("UPDATE user SET status='1' WHERE security=?");
		$stmt->execute($data);
	    }
            function upaddrs($data)
	    {
		$stmt=$this->con->prepare("UPDATE user SET country=?, address=?, city=?, postcode=? WHERE user_id=?");
		return $stmt->execute($data);
	    }
            function upanoti($data)
	    {
		$stmt=$this->con->prepare("UPDATE user SET notification=?, text=?, emailn=?, message=? WHERE user_id=?");
		return $stmt->execute($data);
	    }
            function uppass($data)
	    {
		$stmt=$this->con->prepare("UPDATE user SET password=?  WHERE user_id=?");
		return $stmt->execute($data);
	    }
            function upsecurity($data)
	    {
		$stmt=$this->con->prepare("UPDATE user SET password=?  WHERE user_id=?");
		return $stmt->execute($data);
	    }
            function sports()
	    {
			$stmt = $this->con->prepare("SELECT * FROM sports");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_BOTH);
	    }
            function offer()
	    {
			$stmt = $this->con->prepare("SELECT * FROM offer");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_BOTH);
	    }
            function leagues($data)
	    {
		$stmt = $this->con->prepare("select * from event where sport=? and start>=? limit 5");
		$stmt->execute($data);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function teamodds($data)
	    {
		$stmt = $this->con->prepare("select * from event where id=? order by id desc");
		$stmt->execute($data);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function teamodds1($data)
	    {
		$stmt = $this->con->prepare("select * from team_odds where sports=? and start_date=? order by price asc");
		$stmt->execute($data);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function teamodds2($data)
	    {
		$stmt = $this->con->prepare("select * from team_odds where sports=? and start_date>? order by price asc");
		$stmt->execute($data);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function teamoddsnp($data)
	    {
		$stmt = $this->con->prepare("select * from team_odds where league=? and start_date=? AND start_time<=? AND end_time>=?");
		$stmt->execute($data);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function teammatch($data)
	    {
		$stmt = $this->con->prepare("select * from event where name=?");
		$stmt->execute($data);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function organizerforgot($data)
	    {
		$stmt = $this->con->prepare("select * from user where email=?");
		$stmt->execute($data);
		$count=$stmt->rowCount();
		if($count==1)
		{
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		else
		return 0;
	    }
            function updateforgot($data)
	    {
		$stmt=$this->con->prepare("UPDATE user SET user_password=? WHERE user_id=?");
		return $stmt->execute($data);
	    }
            function lang()
	    {
			$stmt = $this->con->prepare("SELECT * FROM language");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_BOTH);
	    }
             function langu56()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=56");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu57()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=57");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu58()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=58");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu99()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=99");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu100()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=100");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu101()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=101");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu102()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=102");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu227()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=227");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu103()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=103");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu104()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=104");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu105()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=105");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu106()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=106");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu107()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=107");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu108()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=108");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu109()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=109");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu110()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=110");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu111()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=111");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu112()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=112");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu113()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=113");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu114()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=114");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu115()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=115");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu116()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=116");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu117()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=117");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu118()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=118");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu26()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=26");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu119()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=119");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu120()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=120");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu121()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=121");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu122()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=122");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu123()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=123");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu124()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=124");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu125()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=125");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu29()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=29");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu126()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=126");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu127()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=127");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu128()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=128");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu129()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=129");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu130()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=130");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu131()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=131");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    } 
            function langu132()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=132");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu133()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=133");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu134()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=134");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu135()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=135");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu136()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=136");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu137()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=137");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu138()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=138");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu139()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=139");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu140()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=140");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu141()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=141");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu142()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=142");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu143()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=143");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu144()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=144");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu145()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=145");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu146()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=146");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu147()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=147");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu148()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=148");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu149()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=149");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu150()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=150");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu27()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=27");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu151()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=151");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu152()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=152");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu153()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=153");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu154()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=154");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu155()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=155");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu156()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=156");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu157()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=157");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu158()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=158");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu159()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=159");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu160()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=160");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu78()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=78");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu74()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=74");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu161()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=161");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu162()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=162");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu163()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=163");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu164()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=164");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu165()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=165");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu166()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=166");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu167()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=167");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu168()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=168");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu169()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=169");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu170()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=170");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu171()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=171");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu172()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=172");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu173()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=173");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu174()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=174");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu175()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=175");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu176()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=176");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu177()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=177");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu178()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=178");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu179()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=179");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu180()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=180");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu181()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=181");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu182()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=182");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu183()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=183");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu184()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=184");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu185()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=185");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu186()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=186");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu187()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=187");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu188()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=188");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu189()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=189");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu25()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=25");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu28()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=28");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu195()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=195");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu196()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=196");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu190()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=190");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu191()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=191");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu192()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=192");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu193()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=193");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu194()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=194");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu197()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=197");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu198()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=198");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function bets($data)
	    {
		$stmt=$this->con->prepare("INSERT INTO betters (teams, odds, stake, profit, betters_name) VALUES (?,?,?,?,?)");
		return $stmt->execute($data);
                
	    }
            function mybets($data)
	    {
		$stmt = $this->con->prepare("SELECT * FROM  betters where betters_name=?");
		$stmt->execute($data);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
		
	    }
             function innersports($data)
	    {
		$stmt = $this->con->prepare("SELECT * FROM  event where sport=? and start>=?");
		$stmt->execute($data);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
		
	    }
            function leaguedetails($data)
	    {
		$stmt = $this->con->prepare("SELECT * FROM  event where sport=?");
		$stmt->execute($data);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
		
	    }
            function leaguedetails1($data)
	    {
		$stmt = $this->con->prepare("SELECT * FROM  team_odds where league=? and start_date=?");
		$stmt->execute($data);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
		
	    }
             function leaguedetails2($data)
	    {
		$stmt = $this->con->prepare("SELECT * FROM  team_odds where league=? and start_date>?");
		$stmt->execute($data);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
		
	    }
             function leaguedetails3($data)
	    {
		$stmt = $this->con->prepare("SELECT * FROM  team_odds where league=? and start_date=? AND start_time<=? AND end_time>=?");
		$stmt->execute($data);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
		
	    }
            function langu199()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=199");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu200()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=200");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu201()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=201");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu202()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=202");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu203()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=203");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu204()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=204");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu205()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=205");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu206()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=206");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu207()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=207");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu208()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=208");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu209()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=209");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu210()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=210");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu211()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=211");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu212()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=212");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu213()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=213");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu37()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=37");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu214()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=214");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu215()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=215");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu216()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=216");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu217()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=217");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu218()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=218");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu219()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=219");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu220()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=220");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu221()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=221");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu222()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=222");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu223()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=223");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
            function langu224()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=224");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu225()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=225");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function langu226()
	    {
			$stmt = $this->con->prepare("SELECT * FROM tbl_multi_lang where id=226");
			$stmt->execute();
			$count=$stmt->rowCount();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    }
             function todds($data)
	    {
		$stmt = $this->con->prepare("SELECT * FROM team_odds WHERE sports=?");
		$stmt->execute($data);
		$count=$stmt->rowCount();
		if($count==1)
		{
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		else
		return 0;
	    }
            function addcontact($data)
	    {
		$stmt=$this->con->prepare("INSERT INTO contact (name, phone, message, email) VALUES (?,?,?,?)");
		return $stmt->execute($data);
                
	    }
             function checkotp($data)
	    {
		$stmt = $this->con->prepare("select * from user where user_otp=?");
		$stmt->execute($data);
		return $countuser=$stmt->rowCount();
	    }
 }
              