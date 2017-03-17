# WordPress研究

## 环境变量设置
新建文件 `.env`，写入 `mysql` 主机 ip，比如 

```
DB_HOST=10.0.0.12
```
重启容器，`docker-compose up -d`

## 文件夹权限修改
- 每次启动容器之后，运行脚本
```bash
./owner_wp
```

- 在 git pull 或者 git push 之前，运行脚本
```bash
./owner_me
```


