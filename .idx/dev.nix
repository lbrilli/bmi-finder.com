{ pkgs, ... }: {

# NOTE: This is an excerpt of a complete Nix configuration example.
# For more information about the dev.nix file in IDX, see
# https://developers.google.com/idx/guides/customize-idx-env
  channel = "stable-23.11"; # "stable-23.11" or "unstable"
  packages = [
    pkgs.php81
  ];

# Enable previews and customize configuration
idx.previews = {
  enable = true;
  # previews = [
  #   # The following object sets web previews
  #   {
  #     command = [
  #       # "npm"
  #       # "run"
  #       # "start"
  #       # "/home/user/bmi-finder.com/index.php"
  #       # "--port"
  #       # "$PORT"
  #       # "--host"
  #       # "0.0.0.0"
  #       # "--disable-host-check"
  #     ];
  #     cwd = "/home/user/bmi-finder.com/index.php";
      # id = "web";
      # manager = "web";
  #   }
  # ];
};
}